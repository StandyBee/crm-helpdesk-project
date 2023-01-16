<template>
    <div>
        <h1>
            User name: {{ user.name }}
        </h1>
        <h2>
            User email: {{ user.email }}
        </h2>
    </div>
</template>
    
<script>
import axios from "axios";

export default {
    name: "UserPage",
    data() {
        return {
            userId: null,
            user: {},
        };
    },
    async mounted() {
        this.userId = this.$route.params.id;
        let result = await axios.get(`/users/${this.userId}`);
        this.user = result.data;
        // axios.get('/users/' + this.$route.params.id).then(result => {
        //     this.user = result.data;
        // });
    },
    // methods: {
    //     loadName() {
    //         //console.log(this.$route.params);
    //         this.userName = this.$route.params.name;
    //     }
    // }
}
</script>

<style scoped>

</style>
