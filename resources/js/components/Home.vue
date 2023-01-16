<template>
  <div>
    <ul>
      <li>
        <router-link to="/users">Users list</router-link>
      </li>
      <li>
        <router-link to="/admin">Admin list</router-link>
      </li>
    </ul>
    <router-view/>
  </div>
</template>
  
<script>

export default {
  name: "Home",

}
</script>
  