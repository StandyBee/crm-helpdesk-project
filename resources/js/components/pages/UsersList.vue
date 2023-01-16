<template>
  <div>
      <h2>{{ title }}</h2>
    <user-card
      v-for="user in users" 
      :user="user" 
      text="some text..."
      />
  </div>
</template>
    
<script>
import User from '../User.vue';
import axios from 'axios';

export default {
    name: "UsersList",
    components: {
    'user-card': User,
  },
  data() {
    return {
      title: "Crm Helppdesk",
      users: [],
      name: null,
    }
  },
  async mounted() {
    let result = await axios.get('/users');
    this.users = result.data;
    //axios.get('/users').then(result => this.users = result.data);
  },
}
</script>

<style scoped>

</style>