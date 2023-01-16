<template>
    <div>
        <h1>
            User name: {{ userName }}
        </h1>
    </div>
</template>
    
<script>
export default {
    name: "UserPage",
    data() {
        return {
            userName: null,
            //userName = this.$route.params.name,
        };
    },
    mounted() {
        this.userName = this.$route.params.name;
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
