<template>
  <q-item :to="{ name: to }" clickable>
    <q-item-section v-if="icon" avatar>
      <q-icon :name="icon" />
    </q-item-section>

    <q-item-section>
      <q-item-label>{{ title }}</q-item-label>
    </q-item-section>
  </q-item>
</template>

<script setup lang="ts">
export interface LinkItemProps {
  title: string;
  to?: string;
  icon?: string;
}

withDefaults(defineProps<LinkItemProps>(), {
  to: '#',
  icon: '',
});
</script>

<style lang="scss" scoped>
.q-item {
  .q-item__section.q-item__section--avatar {
    min-width: 45px !important;
  }
}
</style>
