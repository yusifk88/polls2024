<template>
    <v-container>

        <v-skeleton-loader type="list-item-three-line@10" v-if="loading"></v-skeleton-loader>
        <span v-else>
         <h1 class="text-h3">Total valid votes: {{ toMoney(tottal_votes) }}</h1>

         <h1>Polling station breakdown</h1>

         <v-card v-for="station in stations" :key="station.id" class="mt-2 community-card">
             <v-card-title>{{ station.name }} - {{ station.code }}</v-card-title>
             <v-card-text>
                 <v-list-item lines="two" v-for="item in station.constituency.candidates" :key="item.id">
                     <template v-slot:prepend>
                         <v-avatar>
                             <v-img :src="item.photo_url"></v-img>
                         </v-avatar>
                     </template>
                     <v-list-item-title>{{ item.name }}</v-list-item-title>
                     <v-list-item-subtitle class="text-h5 mt-2">{{ toMoney(sumVotes(station.id,item.votes)) }} Votes</v-list-item-subtitle>
                     <v-list-item-subtitle>
                         <v-progress-linear :model-value="percent(sumVotes(station.id,item.votes),sumCandidates(station.id,station.constituency.candidates))" class="mt-2" height="20" :color="item.party.color_code"></v-progress-linear>
                     </v-list-item-subtitle>
                 </v-list-item>

             </v-card-text>
         </v-card>
     </span>
    </v-container>
</template>

<script>
import {toMoney} from "./untils/formatters.js";

export default {
    name: "CommunityDetailsComponent",
    props: {
        item: {
            type: Object
        }
    },
    data() {
        return {
            tottal_votes: 0,
            loading: false,
            stations: []
        }
    },
    methods: {
        toMoney,

        sumCandidates(station_id,candidates) {

            let sum = 0;

            candidates.forEach(candidates=>{
                sum+=this.sumVotes(station_id,candidates.votes)
            })


            return sum;

        },
        percent(votes, sum) {

            return sum > 0 ? ((Number(votes) / Number(sum)) * 100).toFixed(2) : 0;

        },
        sumVotes(station_id,votes) {
            let sum = 0;
            if (votes) {
                votes.forEach(item => {
                    if (station_id === item.polling_station_id) {
                        sum += Number(item.votes)
                    }
                })
            }

            return sum;
        },

        getDetails() {
            const URL = "/api/community/" + this.item.id;

            axios.get(URL)
                .then(res => {
                    this.tottal_votes = res.data.total_votes;
                    this.stations = res.data.polling_stations;

                })

        }
    },
    mounted() {
        this.getDetails();
    }
}
</script>

<style>
.community-card {
    transition: 0.3s ease-in-out;
}

.community-card:hover {
    background-color: #00808024;
    border: none;
}
</style>
