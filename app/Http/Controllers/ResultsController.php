<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommunitiesResource;
use App\Models\Candidate;
use App\Models\Community;
use App\Models\Constituency;
use App\Models\PollingStation;
use App\Models\Vote;
use Illuminate\Http\Request;

class ResultsController extends Controller
{

    public function recordPM(Request $request)
    {
        $request->validate([
            "polling_station_id" => "required|integer|exists:polling_stations,id",
            "candidate_id" => "required|integer|exists:candidates,id",
            "votes" => "required|integer|min:1",
        ]);

        $station = PollingStation::find($request->polling_station_id);

        if ($station) {

            $vote = new Vote([
                "votes" => $request->votes,
                "polling_station_id" => $request->polling_station_id,
                "constituency_id" => $station->constituency_id,
                "candidate_id" => $request->candidate_id,
                "community_id" => $station->community_id,
            ]);

            $vote->save();
            return response()->json($vote);

        }


        return response()->json(["message" => "Poling Station not found"], 404);

    }


    public function polingStations()
    {
        $list = PollingStation::query()->with("community")->orderBy('name')->get();

        return response()->json($list);

    }


    public function candidates()
    {
        $candidates = Candidate::with("party")->orderBy("name")->get();

        return response()->json($candidates);

    }


    public function constituencies()
    {
        $list = Constituency::all();
        return response()->json($list);
    }


    public function mpSEIndex()
    {

        $place = Constituency::where("name", "Sissala East")->first();

        if ($place) {
            $MPs = Candidate::query()->withSum("votes", "votes")
                ->with("party")
                ->with("constituency")
                ->where("constituency_id", $place->id)
                ->orderBy("name")
                ->get();

            $communities = Community::query()->with("constituency.candidates.party")
                ->with("constituency.candidates")
                ->whereIn("id",Vote::select("community_id"))
                ->where("constituency_id", $place->id)->get();

            $total_votes = Vote::query()->where("constituency_id", $place->id)->sum("votes");

            $data = [
                "communities" => CommunitiesResource::collection($communities),
                "totalVotes" => $total_votes,
                "MPs" => $MPs,
            ];

            return response()->json($data);

        }

        return response()->json($place);


    }


}