import { createRouter, createWebHistory } from "vue-router";

import Home from './pages/Home.vue'
import Contacts from './pages/About.vue'
import About from './pages/Contacts.vue'
import Projects from './pages/Projects.vue'
import ProjectDetail from './pages/ProjectDetail.vue'
import Error404 from './pages/Error404.vue'

const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes:[
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/chi-siamo',
            name: 'about',
            component: About
        },
        {
            path: '/contatti',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/progetti',
            name: 'projects',
            component: Projects
        },
        {
            path: '/projects/project-detail/:slug',
            name: 'project_detail',
            component: ProjectDetail
        },
        {
            path: '/:pathMatch(.*)*',
            component: Error404
        }
    ]
});

export { router };