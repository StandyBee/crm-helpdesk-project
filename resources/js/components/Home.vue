<template>
  <div>
      <h1>{{ title }}</h1>
    <input type="text" v-model="title">
    <ul>
      <li v-for="user in users">{{ user }}</li>
    </ul>
    <input type="text" v-model="name">
    <button type="button" @click="addUser">Add</button>
    <div>
      <h2>{{ user.name }}</h2>
      <h2>{{ user.last }}</h2>
    </div>
  </div>
</template>
  
<script>
export default {
  name: "Home",
  data() {
    return {
      title: "Crm Helppdesk",
      users: ['Anton', 'Dima', 'Roma'],
      user: {
        name: 'first',
        last: 'last',
      },
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
  