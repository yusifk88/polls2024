
<template>
    <v-tabs>
        <v-tab to="/sissala-west">Parliamentary</v-tab>
        <v-tab to="/sissala-west/presidential">Presidential</v-tab>
    </v-tabs>
    <presss-results-component :from="from"></presss-results-component>
</template>

<script>
import PresssResultsComponent from "./PresssResultsComponent.vue";

export default {
    name: "PresidentialComponent",
    components: {PresssResultsComponent},
    computed:{
        from(){

            const path = window.location.pathname;

            return path.includes("sissala-east") ? 'east' : 'west';


        }
    }
}
</script>

<style scoped>

</style>
