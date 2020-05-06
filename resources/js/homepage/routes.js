import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/views/ExampleComponent.vue';
import Dashboard from './components/views/DashboardComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: Home,
        },

        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
        },
    ]
})

export default router;