<template>
    <div>
      <h2 :class="getClass(user.role)">{{ user.name }} {{ user.last }}</h2>
      <p>{{ text }}</p>
      <template v-if="user.role === 'client'">
        <p>{{ user.role }}</p>
      </template>
      <template v-if="user.role === 'manager'">
        <small>{{ user.role }}</small>
      </template>
      <template v-else>
        <h2>{{ user.role }}</h2>
      </template>
    </div>
</template>

<script>

export default {
    props: ['user', 'text'],
    name: "User",
    methods: {
        getClass(role) {
            return 'top-'+role;
        }
    }
}
</script>

<style scoped>
.top-admin {
    color: green;
}

.top-manager {
    color: blue;
}

.top-client {
    color: red;
}
</style>