<template>
    <v-row dense>
        <v-col cols="12" class="mb-8">
            <v-tabs>
                <v-tab to="/sissala-east">Parliamentary</v-tab>
                <v-tab to="/sissala-east/presidential">Presidential</v-tab>
            </v-tabs>
            <v-toolbar class="bg-transparent">
                <v-toolbar-title class="pl-0 ml-0">
                    <live-indecator-component></live-indecator-component>
                </v-toolbar-title>
                <template v-slot:prepend>
                    <h1 class="text-red text-h6">Live</h1>
                </template>

            </v-toolbar>
            <h1 class="text-h4">Sissala East Constituency</h1>

        </v-col>
        <v-col cols="12" sm="8">
            <v-row dense class="ml-3 mr-3">
                <v-col
                    cols="6"
                    v-for="(can,index) in candidates"
                    :key="can.id"
                >
                    <template v-if="index==0">

                        <v-row>
                            <v-col cols="3">
                                <v-avatar :size="$vuetify.display.mobile ?40: 90">
                                    <v-img :src="can.photo_url"></v-img>
                                </v-avatar>
                            </v-col>
                            <v-col cols="9">
                                <h1 class="text-h4 font-weight-black mt-6">{{ percentage(can.votes_sum_votes) }}%</h1>
                                <p v-if="can.name.includes('Bataglia')">Bataglia</p>
                                <p v-else>Chinnia</p>

                            </v-col>

                        </v-row>
                    </template>

                    <template v-else>

                        <v-row>
                            <v-col cols="9" class="text-right">
                                <h1 class="text-h4 font-weight-black mt-6">{{ percentage(can.votes_sum_votes) }}%</h1>
                                <p v-if="can.name.includes('Bataglia')">Bataglia</p>
                                <p v-else>Chinnia</p>

                            </v-col>
                            <v-col cols="3">
                                <v-avatar :size="$vuetify.display.mobile ?40: 90">
                                    <v-img :src="can.photo_url"></v-img>
                                </v-avatar>
                            </v-col>


                        </v-row>
                    </template>

                </v-col>

                <v-col cols="12">
                    <apexchart type="bar" height="70" :options="chartOptions" :series="series"></apexchart>
                    <v-row dense style="margin-top: -25px">
                        <v-col
                            v-for="(can,index) in candidates"
                            :key="can.id"

                            cols="6" :class="{'pl-10':index===0,'text-right':index>0,'pr-6':index>0}">
                            {{ can ? toMoney(can.votes_sum_votes) : 0 }} Votes
                        </v-col>

                    </v-row>
                </v-col>

                <v-col cols="12">
                    <v-row>
                        <v-col cols="12">
                            <community-summaries :total_votes="total_Votes"
                                                 :communities="communities"></community-summaries>
                        </v-col>
                    </v-row>

                </v-col>

            </v-row>

        </v-col>
        <v-divider vertical></v-divider>

        <v-col cols="12" sm="4">
            <side-trend-component :items="communities"></side-trend-component>

        </v-col>
    </v-row>
</template>

<script>
import HoneyCombChartComponent from "./HoneyCombChartComponent.vue";
import SideTrendComponent from "./SideTrendComponent.vue";
import {toMoney} from "./untils/formatters.js";
import CommunitySummaries from "./CommunitySummaries.vue";
import LiveIndecatorComponent from "./LiveIndecatorComponent.vue";
import {store} from "./store.js";

export default {
    name: "ParliamentoryComponent",
    components: {LiveIndecatorComponent, CommunitySummaries, SideTrendComponent, HoneyCombChartComponent},
    data() {
        return {
            candidates: [],
            communities: [],
            total_Votes: 0
        }
    },
    watch:{
        reload(){
            this.getResults();
        }
    },
    computed: {

        reload() {
            return store.state.reload;
        },

        series() {

            const list = [];

            if (this.candidates.length) {

                this.candidates.forEach(item => {

                    list.push({
                        name: item.name,
                        color: item.party.color_code,
                        data: [item.votes_sum_votes]
                    })
                })
            }


            return list;
        },
        chartOptions() {
            return {
                chart: {
                    type: 'bar',
                    height: 10,
                    stacked: true,
                    stackType: '100%',
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false,
                    show: false

                },

                plotOptions: {
                    bar: {
                        horizontal: true,
                        barHeight: '100%'
                    },
                },
                stroke: {
                    width: 1,
                    show: false
                },

                xaxis: {
                    labels: {
                        show: false,

                    },
                    categories: ["Parliamentary -2024"],
                },
                yaxis: {
                    labels: {
                        show: false,

                    },
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return toMoney(val) + " Votes"
                        }
                    }
                },
                fill: {
                    opacity: 1

                },
                grid: {
                    show: false
                },
                legend: {
                    show: false,
                    position: 'top',
                    horizontalAlign: 'left',
                    offsetX: 40
                }
            }
        },

    },
    methods: {
        toMoney,

        percentage(num) {

            return Number(this.total_Votes) > 0 ? ((num / Number(this.total_Votes)) * 100).toFixed(2) : 0;
        },
        getResults() {
            axios.get("/api/mp-results/sissala-east")
                .then(res => {
                    this.candidates = res.data.MPs;
                    this.communities = res.data.communities;
                    this.total_Votes = res.data.totalVotes
                })
        }
    },
    mounted() {
        this.getResults();
    }
}
</script>

<style scoped>

</style>
