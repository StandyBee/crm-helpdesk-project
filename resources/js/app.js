import * as Vue from "vue";
//import Welcome from "./Welcome.vue";
// require('./bootstrap');
//import * as Vue from 'vue';
import * as VueRouter from 'vue-router';
import routes from './routes.js';
import Home from './components/Home.vue';

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
});

Vue.createApp(Home).use(router).mount('#app');
