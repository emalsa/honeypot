import {createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import About from "../components/home/About.vue"
import Dashboard from "../components/Dashboard";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/about",
        name: "about",
        component: About,
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;