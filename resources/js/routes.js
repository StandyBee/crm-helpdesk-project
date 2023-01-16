import UsersList from './components/pages/UsersList.vue';
import Admin from './components/pages/Admin.vue';
//import Home from './components/Home.vue';

const routes = [
    // {path: '/', component: Home},
    {path: '/users', component: UsersList},
    {path: '/admin', component: Admin},
];

export default routes;
