<template>
    <div>
        <navbar v-if="$route.name !== 'main'"></navbar>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from "./blog/Navbar";
    export default {
        components: {Navbar}
    }
</script>
