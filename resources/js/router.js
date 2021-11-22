import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

const routes = [
    {
        path: '/dashboard',
        name: 'home',
        component: require('./admin/Home').default
    },

];

const router = new Router({
    // mode: 'history',
    routes
});

export default router;