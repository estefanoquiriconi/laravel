<template>
    <h1>{{ counter }}</h1>
    <button @click="increment">increment</button>
    <NavLink :href="route('login')">Login</NavLink>
</template>

<script setup>
import { ref } from 'vue'
    import NavLink from '@/Components/NavLink.vue';
const counter = ref(0)
const increment = () => {
        counter.value++
    }
</script>

<style scoped></style>

