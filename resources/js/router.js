
import { createRouter, createWebHistory} from 'vue-router'
import ResultsPage from "./pages/ResultsPage.vue";
import ParliamentoryComponent from "./ParliamentoryComponent.vue";
import PresidentialComponent from "./PresidentialComponent.vue";

const routes = [
    {
      path: "/",
      redirect:"/sissala-east"
    },
    {
        path:"/sissala-east",
        component:ResultsPage,
        children:[
            {
                path:"",
                component:ParliamentoryComponent

            } ,
            {
                path:"presidential",
                component:PresidentialComponent

            }
        ]

    }
]

export const router = createRouter({
    history: createWebHistory(),
    routes,
})

