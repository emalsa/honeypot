import {createRouter, createWebHistory} from "vue-router";
import Home from "../components/Home.vue";
import Dashboard from "../components/Dashboard.vue";
import Contact from "../components/Contact.vue";
import Register from "../components/Register.vue";
import Login from "../components/Login.vue";
import PasswordReset from "../components/PasswordReset.vue";
import TermsRights from "../components/TermsRights.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/contact",
        name: "Contact",
        component: Contact,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
    {
        path: "/password-reset",
        name: "PasswordReset",
        component: PasswordReset,
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
    },
    {
        path: "/terms-and-rights",
        name: "TermsRights",
        component: TermsRights,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
    scrollBehavior: function (to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth',
            }
        } else {
            return {
                top: 0,
                behavior: 'smooth',
            }
        }
    },
});

export default router;