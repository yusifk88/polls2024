<?php

namespace App\Http\Resources;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommunitiesResource extends JsonResource
{



    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $item =  parent::toArray($request);

        $newcads=[];
        $can = $item["constituency"]["candidates"];

        foreach ($can as $candidate) {

            $candidate["total_votes"] = Vote::where("candidate_id", $candidate["id"])->where("community_id",$item["id"])->sum("votes");

            $newcads[]=$candidate;
        }


        return [
            "id"=>$item["id"],
            "name"=>$item["name"],
            "longitude"=>$item["longitude"],
            "latitude"=>$item["latitude"],
            "constituency"=>$item["constituency"],
            "candidate_votes"=>$newcads,
        ];
    }
}
