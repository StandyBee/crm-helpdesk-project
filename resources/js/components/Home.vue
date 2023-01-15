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
import User from './User.vue';

export default {
  name: "Home",
  components: {
    'user-card': User,
  },
  data() {
    return {
      title: "Crm Helppdesk",
      users: [
        {
          name: 'Tota',
          last: 'Letov',
          role: 'admin',
        },
        {
          name: 'Rita',
          last: 'Tickel',
          role: 'manager',
        },
        {
          name: 'Emma',
          last: 'Stome',
          role: 'client',
        },
        {
          name: 'Dash',
          last: 'Board',
          role: 'manager',
        },
    ],
      name: null,
    }
  },
  methods: {
    addUser() {
      this.users.push(this.name);
      this.clearName();
    },
    clearName() {
      this.name = null;
    }
  }
}
</script>
  