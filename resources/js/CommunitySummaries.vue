<template>

    <h1 class="mt-8 text-h5">Community summaries</h1>

<center>

    <apexchart
        v-if="firstCommunity"
        type="donut"
        width="450px"
        class="mx-auto"
        :options="chartOptions"
        :series="series"></apexchart>
</center>


    <h1 class="text-h2 mb-4 mt-4">{{toMoney(total_votes)}} Total votes</h1>



    <p class="text-h6">Breakdown</p>

    <v-row dense>
        <v-col cols="12" v-for="item in sortedCommunities" :key="item.id">
            <community-card-component :item="item"></community-card-component>
        </v-col>
    </v-row>



</template>

<script>

import CommunityCardComponent from "./CommunityCardComponent.vue";
import {toMoney} from "./untils/formatters.js";

export default {
    name: "CommunitySummaries",
    components: {CommunityCardComponent},
    props: {
        from:{
          type:String,
          default:"east"
        },
        communities: {
            type: Array
        },
        total_votes:{

        }
    },
    data() {
        return {}
    },
    computed: {


        sortedCommunities() {

        return  this.communities.sort((a, b) => {

                let aSum = 0;
                let bSum = 0;

                a.candidate_votes.forEach(item => {
                    aSum += Number(item.total_votes)
                })
                b.candidate_votes.forEach(item => {
                    bSum += Number(item.total_votes)
                })


                return bSum-aSum;

            });

        },

        series() {
            let setOne = 0;
            let settwo = 0;
            let setthree = 0;

            this.communities.forEach(item => {


                if (this.from=='east'){
                if (Number(this.findCandidate(item.candidate_votes, "Amidu Chinnia Issahaku").total_votes) < Number(this.findCandidate(item.candidate_votes, "Issah Mohamed Bataglia").total_votes)) {

                    setOne++;

                } else {

                    settwo++;
                }
                }else {

                    if (Number(this.findCandidate(item.candidate_votes, "Mohammed Adams Supkaru").total_votes) > Number(this.findCandidate(item.candidate_votes, "Salifu Naliwie Baliwie").total_votes)) {

                        setOne++;

                    } else {

                        settwo++;
                    }

                }

            })

            return [setOne, settwo];

        },

        donutColors() {

            let list = [];
            let labels = [];

            this.firstCommunity.candidate_votes.forEach(item => {
                list.push(item.party.color_code);

                if (this.from=='east') {
                    labels.push(item.name.toLowerCase().includes("chinnia") ? "Chinnia" : "Bataglia")
                }else {


                    if (item.name.toLowerCase().includes("supkaru")){
                        labels.push("Supkaru");
                    }

                    if (item.name.toLowerCase().includes("naliwie")){
                        labels.push("Naliwie");
                    }

                    if (item.name.toLowerCase().includes("yussif")){
                        labels.push("Yussif");
                    }

                }
            })

            return {
                colors: list,
                labels: labels
            };

        },


        firstCommunity() {
            return this.communities[0];
        },

        chartOptions() {
            return {
                colors: this.donutColors.colors,
                chart: {
                    type: 'donut',
                },
                labels: this.donutColors.labels,
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "Won in " + val + " electoral areas"
                        }
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

        }
    },
    methods: {
        toMoney,


        findCandidate(candidates, name) {

            return candidates.find(item => item.name.toLowerCase() === name.toLowerCase())

        }

    },
    mounted() {


    }
}
</script>


<style scoped>

</style>
