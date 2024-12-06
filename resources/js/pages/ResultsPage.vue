<template>
<span>

    <v-tabs>
        <v-tab to="/sissala-east">Parliamentary</v-tab>
        <v-tab to="/sissala-east/presidential">Presidential</v-tab>
    </v-tabs>
    <v-tabs-window class="mt-7">
        <router-view></router-view>
    </v-tabs-window>
</span>

</template>

<script>
export default {
    name: "ResultsPage"
}
</script>


<style scoped>

</style>
