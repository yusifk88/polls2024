<template>

    <v-list>
        <v-list-subheader>Voter domination by community</v-list-subheader>
        <v-list-item>
                <v-text-field v-model="search" placeholder="Search..."></v-text-field>

        </v-list-item>
        <v-list-item lines="two" class="border-t rounded-0" style="border-radius: 0!important;"
                     :style="'background-color:'+ findLeader(item.candidate_votes)[0].party.color_code"
                     v-for="item in filtered">

            <v-list-item-title class="text-white">{{ item.name }}</v-list-item-title>
            <v-list-item-subtitle class="text-white" style="opacity: 1">
                {{ toMoney(findLeader(item.candidate_votes)[0].total_votes) }}Votes - {{percentage(findLeader(item.candidate_votes))}}%
            </v-list-item-subtitle>
            <template v-slot:append>
                <v-avatar>
                    <v-img :src="findLeader(item.candidate_votes)[0].photo_url"></v-img>
                </v-avatar>
                <p class="text-white">
                    {{ findLeader(item.candidate_votes)[0].name.includes("Chinnia") ? 'Chi.' : 'Bat.' }}</p>
            </template>
        </v-list-item>
    </v-list>
</template>

<script>
import {toMoney} from "./untils/formatters.js";
import {th} from "vuetify/locale";

export default {
    name: "SideTrendComponent",
    props: {
        items: {
            type: Array
        },
        total_votes: {
            type: Number
        }
    },
    data() {
        return {
            search:''
        }
    },
    methods: {
        toMoney,
        findLeader(cadidates) {
            return cadidates.sort((a, b) => Number(b.total_votes) - Number(a.total_votes));

        },
        percentage(items) {

            const leader = items[0];

            let total = 0;

            items.forEach(item=>{
                total+=Number(item.total_votes);
            })


            return total>0 ? ((Number(leader.total_votes)/total * 100)).toFixed(2) : 0


        }

    },
    computed: {

        filtered(){

            if (!this.search){
                return this.items;
            }


            return this.items.filter(item=>{
                return item.name.toLowerCase().includes(this.search.toLowerCase())
            })
        }
    },

}
</script>

<style scoped>

</style>
