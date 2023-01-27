import { createRouter, createWebHistory } from "vue-router";

import Home from './pages/Home.vue'
import Contacts from './pages/About.vue'
import About from './pages/Contacts.vue'


const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routers:[
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/contatti',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/chi-siamo',
            name: 'About',
            component: About
        }
    ]
});

export { router };