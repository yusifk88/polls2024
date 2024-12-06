import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

// Vuetify
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/styles';
import {createVuetify} from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import {router} from "./router.js";
import VueApexCharts from "vue3-apexcharts";
import RecordComponent from "./RecordComponent.vue";
import RecordPressComponent from "./RecordPressComponent.vue";
import {store} from "./store.js";

const vuetify = createVuetify({
    components,
    directives,
    defaults: {

        VDataTable: {
            FixedHeader: true,
            height: "78vh"
        },
        VBtn: {
            color: "teal",
            size: "x-large",
            variant: 'flat',
            rounded: 'lg',
            style: 'text-transform: capitalize; cursor:pointer;',
        },
        VOverlay: {
            scrim: "#036358"
        },
        VSheet: {
            rounded: 'lg'

        },
        VTabs: {
            color: "teal"
        },

        VCard: {
            variant: "flat",
            border: true,
            style: "border-radius:15px !important"
        },
        VTextField: {
            variant: "outlined",
            color: "teal",
            size: "x-large",
            rounded: "lg"
        },
        VTextarea: {
            variant: "outlined",
            color: "teal",
            size: "x-large",
            rounded: "lg"
        },
        VSelect: {
            variant: "outlined",
            color: "teal",
            rounded: "lg",
            size: "x-large",
            // VIcon: {
            //
            //     color: ""
            //
            // }
        },
        VAutocomplete: {
            variant: "outlined",
            color: "teal",
            rounded: "lg",
            size: "x-large"
        },
        VCombobox: {
            variant: "outlined",
            color: "teal",
            rounded: "lg",
            size: "x-large"
        },
        VRangeSlider: {
            color: "teal"
        },
        VSlider: {
            color: "teal"

        },
        VSwitch: {
            inset: true,
            color: "teal",
            hideDetails: true
        },
        VToolbar: {
            color: "",

        },

        VListItem: {
            rounded: "lg"
        },
        VAlert: {
            rounded: "lg"
        },
        VIcon: {

            color: "teal"

        },
        VCheckbox: {
            VIcon: {

                color: ""

            }
        },
        VMenu: {
            rounded: "xl",
            style: "border-radius:15px !important"
        },
        VList: {
            rounded: "xl",
            style: "border-radius:15px !important",
            color: "teal"
        },
        VDialog: {
            style: "border-radius:15px !important",
            scrim: "#036358"
        },
        VDatePicker: {
            style: "border-radius:15px !important; text-transform: capitalize;",
            color: "teal"

        }
    }
});

createApp({
    components: {RecordComponent, RecordPressComponent},
    data() {
        return {
            count: 0
        }
    },
    mounted() {

        Echo.channel(`votes_updated`)
            .listen('VotesPosted', (e) => {
                store.state.reload = !store.state.reload;
            });
    }
})
    .use(store)
    .use(vuetify)
    .use(router)
    .use(VueApexCharts)
    .mount('#app');
