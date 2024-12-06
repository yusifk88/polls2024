<template>

    <v-dialog v-model="showDialog" width="500" :fullscreen="$vuetify.display.mobile">
        <template v-slot:activator="{props}">
            <v-btn :size="$vuetify.display.mobile ? 'default' : 'large'" variant="flat" v-bind="props">Record Parl</v-btn>
        </template>

        <v-card>
            <v-toolbar class="bg-transparent">
                <v-toolbar-title>
                    Record Parliamentary Results
                </v-toolbar-title>


                <v-btn @click="showDialog=false">close</v-btn>

            </v-toolbar>
            <v-card-text>

                <v-btn-toggle mandatory @update:model-value="candidate_id=null" v-model="toggle">
                    <v-btn color="teal" value="east">
                        <v-icon color="white" v-if="toggle=='east'">mdi-check</v-icon>
                        Sissala East
                    </v-btn>

                    <v-btn color="teal" value="west">
                        <v-icon color="white" v-if="toggle=='west'">mdi-check</v-icon>
                        Sissala West
                    </v-btn>
                </v-btn-toggle>

                <v-form class="mt-3" ref="recordForm">
                    <v-label>Polling Station</v-label>
                    <v-autocomplete
                        :rules="rules"
                        :items="filteredStations"
                        item-value="id"
                        v-model="poling_station_id"
                        item-title="name"


                    >
                        <template v-slot:item="{item, props}">
                            <v-list-item v-bind="props">
                                <v-list-item-title>{{ item.name }}</v-list-item-title>
                                <v-list-item-subtitle>{{ item.raw.code }}</v-list-item-subtitle>
                                <v-list-item-subtitle>{{ item.raw.community.name }}</v-list-item-subtitle>

                            </v-list-item>
                        </template>

                        <template v-slot:selection="{item, props}">
                            <v-list-item v-bind="props">
                                <v-list-item-title>{{ item.raw.name }}</v-list-item-title>
                                <v-list-item-subtitle>{{ item.raw.code }}</v-list-item-subtitle>
                                <v-list-item-subtitle>{{ item.raw.community.name }}</v-list-item-subtitle>
                            </v-list-item>
                        </template>
                    </v-autocomplete>

                    <v-label>Candidate</v-label>
                    <v-autocomplete :rules="rules" v-model="candidate_id" :items="filteredCondidates" item-title="name"
                                    item-value="id">
                        <template v-slot:item="{item,props}">
                            <v-list-item v-bind="props">
                                <template v-slot:prepend>
                                    <v-avatar>
                                        <v-img :src="item.raw.photo_url"></v-img>
                                    </v-avatar>
                                </template>
                                <v-list-item-title>{{ item.name }}</v-list-item-title>
                                <template v-slot:append>
                                    <v-avatar size="20">
                                        <v-img :src="item.raw.party.logo_url"></v-img>
                                    </v-avatar>
                                    {{ item.raw.party.acronym }}
                                </template>

                            </v-list-item>
                        </template>


                        <template v-slot:selection="{item,props}">
                            <v-list-item v-bind="props" class="pl-0 ml-0">
                                <template v-slot:prepend>
                                    <v-avatar>
                                        <v-img :src="item.raw.photo_url"></v-img>
                                    </v-avatar>
                                </template>
                                <v-list-item-title>{{ item.raw.name }}</v-list-item-title>
                                <template v-slot:append>
                                    <v-avatar size="20">
                                        <v-img :src="item.raw.party.logo_url"></v-img>
                                    </v-avatar>
                                    {{ item.raw.party.acronym }}
                                </template>

                            </v-list-item>
                        </template>
                    </v-autocomplete>

                    <v-label>Votes</v-label>
                    <v-text-field :rules="rules" type="number" v-model="votes" min="0"></v-text-field>

                </v-form>

            </v-card-text>
            <v-card-actions>
                <v-btn variant="flat" :loading="saving" block @click="save">Save</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

    <v-snackbar :color="alertColor" v-model="showAlert">{{ alertText }}</v-snackbar>
</template>

<script>
export default {
    name: "RecordComponent",
    data() {
        return {
            user:null,
            showDialog: false,
            constituencies: [],
            candidates: [],
            toggle: 'east',
            candidate_id: null,
            pStations: [],
            poling_station_id: null,
            votes: 0,
            alertColor: "green",
            alertText: "",
            showAlert: false,
            saving: false,
            rules: [
                value => {
                    if (value) return true

                    return 'This is required.'
                },
            ],

        }
    },
    computed: {

        filteredStations() {

            return this.pStations.filter(item => {
                return item.constituency_id == this.selectedConstituency.id;
            });

        },


        selectedConstituency() {
            const name = this.toggle == 'east' ? 'sissala east' : 'sissala west';

            return this.constituencies.find(item => {
                return item.name.toLowerCase() === name;
            });

        },

        filteredCondidates() {

            const items = this.candidates.filter(item => {
                return item.constituency_id == this.selectedConstituency.id;
            })

            return items;
        }
    },
    methods: {

        getUser(){
          axios.get("/api/user")
              .then(res=>{
                  this.user=res.data.data;
              })
        },

       async save() {

            const {valid} = await this.$refs.recordForm.validate();

            if (valid) {

                this.saving = true;

                const data = {
                    polling_station_id: this.poling_station_id,
                    votes: this.votes,
                    candidate_id: this.candidate_id
                };

                axios.post("/api/record-pm", data)
                    .then(res => {
                        this.votes = 0;
                        this.candidate_id = null;
                        this.alertColor = "green";
                        this.alertText = "Record saved";
                        this.showAlert = true;
                        this.saving = false;
                    })
                    .catch(error => {

                        this.saving = false;
                        this.alertText = error.response.data.message ? error.response.data.message : "Something went wrong, try again";
                        this.alertColor = "error";
                        this.showAlert = true;
                    })

            }

        },


        getConstituencies() {
            axios.get("/api/constituencies")
                .then(res => {
                    this.constituencies = res.data
                })
        },
        getCandidates() {
            axios.get("/api/candidates")
                .then(res => {
                    this.candidates = res.data
                })
        },

        getPolingStations() {
            axios.get("/api/poling-stations")
                .then(res => {
                    this.pStations = res.data
                })
        }


    },
    mounted() {
        this.getCandidates();
        this.getConstituencies();
        this.getPolingStations();
        this.getUser();
    }
}
</script>

<style scoped>

</style>
