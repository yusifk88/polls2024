<template>

    <v-list>
        <v-list-subheader>Voter domination by community</v-list-subheader>
        <v-list-item>
                <v-text-field v-model="search" placeholder="Search..."></v-text-field>

        </v-list-item>
    <side-item-component
    v-for="item in filtered"
    :key="item.id"
    :item="item"
    ></side-item-component>

    </v-list>
</template>

<script>
import {toMoney} from "./untils/formatters.js";
import {th} from "vuetify/locale";
import SideItemComponent from "./SideItemComponent.vue";

export default {
    name: "SideTrendComponent",
    components: {SideItemComponent},
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
