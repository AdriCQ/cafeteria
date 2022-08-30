<template>
    <router-view />
</template>

<script lang="ts" setup>
import { onMounted } from "vue";
import { loadJQuery } from "src/helpers";

onMounted(() => {
    setTimeout(loadJQuery, 1000);
});
</script>
