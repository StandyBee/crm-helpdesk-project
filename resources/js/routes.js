import UsersList from './components/pages/UsersList.vue';
import Admin from './components/pages/Admin.vue';
import UserPage from './components/pages/UserPage.vue';
//import Home from './components/Home.vue';

const routes = [
    // {path: '/', component: Home},
    {path: '/users', component: UsersList},
    {path: '/users/:id', component: UserPage},
    {path: '/admin', component: Admin},
];

export default routes;
