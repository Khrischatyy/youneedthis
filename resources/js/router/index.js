import Vue from "vue";
import VueRouter from "vue-router";
import Main from "../components/blog/Main";
import Categories from "../components/blog/Categories";
import Articles from "../components/blog/Articles";

Vue.use(VueRouter);

const routes = [
    {
        name: 'main',
        component: Main,
        path: '/',
    },
    {
        name: 'categories',
        component: Categories,
        path: '/categories',
    },
    {
        name: 'cybersecurity',
        component: Articles,
        path: '/cybersecurity',
    },
    {
        name: 'programming',
        component: Articles,
        path: '/programming',
    },
    {
        name: 'youneedthis',
        component: Articles,
        path: '/youneedthis',
    },
    // {
    //     name: 'NotFound',
    //     component: NotFoundPage,
    //     path: '*',
    // },
];

const router = new VueRouter({
    routes,
    mode: 'history',
});

export default router;
