
<template>
    <v-list-item
        @click="showDialog=true"
        lines="two" class="border-t rounded-0" style="border-radius: 0!important;"
        :style="'background-color:'+ findLeader(item.candidate_votes)[0].party.color_code">
        <v-list-item-title class="text-white">{{ item.name }}</v-list-item-title>
        <v-list-item-subtitle class="text-white" style="opacity: 1">
            {{ toMoney(findLeader(item.candidate_votes)[0].total_votes) }}Votes - {{percentage(findLeader(item.candidate_votes))}}%
        </v-list-item-subtitle>
        <template v-slot:append>
            <v-avatar>
                <v-img :src="findLeader(item.candidate_votes)[0].photo_url"></v-img>
            </v-avatar>

            <p class="text-white" v-if="from=='east'">
                {{ findLeader(item.candidate_votes)[0].name.includes("Chinnia") ? 'Chi.' : 'Bat.' }}</p>

            <p class="text-white" v-else>
                {{ findLeader(item.candidate_votes)[0].name.includes("Supkaru") ? 'Sup.' : 'Nal.' }}</p>


        </template>
    </v-list-item>
    <v-dialog scrollable fullscreen v-model="showDialog">
        <v-card>
            <v-toolbar class="bg-transparent">
                <v-toolbar-title>{{item.name}}</v-toolbar-title>
                <v-btn @click="showDialog=false">close</v-btn>
            </v-toolbar>
            <v-card-text>

<community-details-component :item="item"></community-details-component>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script>
import {toMoney} from "./untils/formatters.js";
import CommunityDetailsComponent from "./CommunityDetailsComponent.vue";

export default {
    name: "SideItemComponent",

    components: {CommunityDetailsComponent},
    props:{
        from:{
          type:String,
          default:"east"
        },
        item:{
            type:Object
        }
    },
    data(){
      return{
          showDialog:false
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

    }
}
</script>

<style scoped>

</style>
