<template>
    <app-header />
    <router-view />
    <app-footer />
</template>

<script setup lang="ts">
import AppHeader from "src/layouts/AppHeader.vue";
import AppFooter from "./AppFooter.vue";
</script>
