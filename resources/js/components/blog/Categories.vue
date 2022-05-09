<template>
    <div class="wrapper d-flex align-items-center">
        <div class="w-100">
            <nav class="menu lg-text">
                <router-link :to="category.name" v-for="category in categories">
                    <div class="link">{{ category.name }}</div>
                </router-link>
            </nav>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import {API_BASE_URL} from "../../config";

export default {
    name: "Categories",
    data() {
        return {
            categories: null,
        }
    },
    methods: {
        getCategories() {
            axios.get(`${API_BASE_URL}/api/categories`)
                .then((response) => {
                    this.categories = response.data.data;
                })
        },
    },
    created() {
        this.getCategories();
    }
}
</script>

<style scoped>

</style>
