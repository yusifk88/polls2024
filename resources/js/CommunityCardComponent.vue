<template>
    <v-card class="community-card">
        <v-card-title>
            <v-icon>mdi-map-marker-outline</v-icon>
            {{ item.name }}
        </v-card-title>
        <v-card-text>

            <v-list-item lines="two" v-for="(person,index) in item.candidate_votes" :class="{'border-b':index==0}">
                <template v-slot:prepend>
                    <v-avatar>
                        <v-img :src="person.photo_url"></v-img>
                    </v-avatar>
                </template>
                <v-list-item-title>{{ person.name }} - {{percent(person.total_votes)}}% <v-spacer></v-spacer><strong>{{ toMoney(person.total_votes) }} Votes</strong></v-list-item-title>
                <v-list-item-subtitle>
                    <v-progress-linear height="10" :model-value="percent(person.total_votes)" :color="person.party.color_code"></v-progress-linear>
                </v-list-item-subtitle>


            </v-list-item>

        </v-card-text>
    </v-card>
</template>

<script>
import {toMoney} from "./untils/formatters.js";

export default {
    name: "CommunityCardComponent",
    props: {
        item: {
            type: Object
        }
    },
    data() {
        return {}
    },
    computed: {
        total_votes() {

            let sum = 0;

            this.item.candidate_votes.forEach(item => {
                sum += Number(item.total_votes)
            })

            return sum;
        }
    },
    methods: {toMoney,

    percent(num){
        return this.total_votes>0 ? ((Number(num)/Number(this.total_votes))*100).toFixed(2) : 0

    }

    },


}
</script>

<style>
.community-card{
 transition:0.3s ease-in-out;
}
.community-card:hover{
    background-color: #00808024;
    border:none;
}

</style>
