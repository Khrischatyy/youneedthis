<template>

</template>

<script>
import {API_BASE_URL} from "../../config";
export default {
    name: "Articles",
    methods: {
        getArticles() {
            axios.get(`${API_BASE_URL}/api/`)
        }
    }
}
</script>

<style scoped>

</style>
