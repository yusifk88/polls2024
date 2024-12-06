import {createRouter, createWebHistory} from 'vue-router'
import ResultsPage from "./pages/ResultsPage.vue";
import ParliamentoryComponent from "./ParliamentoryComponent.vue";
import PresidentialComponent from "./PresidentialComponent.vue";
import ParliamentorySWComponent from "./ParliamentorySWComponent.vue";
import PresidentialSWComponent from "./PresidentialSWComponent.vue";
import LoginPage from "./pages/LoginPage.vue";

const routes = [
    {
        path: "/",
        redirect: "/sissala-east"
    },
    {
      path: "/login",
      component: LoginPage
    },
    {
        path: "/sissala-east",
        component: ResultsPage,
        children: [
            {
                path: "",
                component: ParliamentoryComponent

            },
            {
                path: "presidential",
                component: PresidentialComponent

            }
        ]

    },
    {
        path: "/sissala-west",
        component: ResultsPage,
        children: [
            {
                path: "",
                component: ParliamentorySWComponent

            },
            {
                path: "presidential",
                component: PresidentialSWComponent

            }
        ]

    }
]

export const router = createRouter({
    history: createWebHistory(),
    routes,
})

