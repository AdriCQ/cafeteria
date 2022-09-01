<template>
  <q-drawer v-model="leftDrawerComp" show-if-above>
    <div class="container">
      <q-list separator>
        <q-item>
          <q-item-section>
            <q-item-label class="text-center text-h6 text-weight-regular"
              >Administración</q-item-label
            >
          </q-item-section>
        </q-item>

        <LinkItem
          v-for="(link, index) in navLinks"
          :key="`main-drawer-link-${index}`"
          v-bind="link"
          class="text-body1"
        />
      </q-list>
    </div>
  </q-drawer>
</template>

<script setup lang="ts">
import { computed } from 'vue';
import { ROUTE_NAME } from 'src/router';
import LinkItem, { LinkItemProps } from 'components/LinkItem.vue';

const props = defineProps<{
  leftDrawer: boolean;
}>();

const emits = defineEmits<{
  (e: 'update:leftDrawer', newValue: boolean): void;
}>();

const leftDrawerComp = computed({
  get() {
    return props.leftDrawer;
  },
  set(newValue: boolean) {
    emits('update:leftDrawer', newValue);
  },
});

const navLinks: Array<LinkItemProps> = [
  { title: 'Perfil', icon: 'mdi-account-outline', to: ROUTE_NAME.PROFILE },
  {
    title: 'Aplicación',
    icon: 'mdi-cellphone-link',
    to: ROUTE_NAME.APP_CONFIG,
  },
  { title: 'Ofertas', icon: 'mdi-gift-outline', to: ROUTE_NAME.OFFERS },
  {
    title: 'Eventos',
    icon: 'mdi-calendar-month-outline',
    to: ROUTE_NAME.EVENTS,
  },
  { title: 'Noticias', icon: 'mdi-card-text-outline', to: ROUTE_NAME.NEWS },
  {
    title: 'Comentarios',
    icon: 'mdi-comment-text-outline',
    to: ROUTE_NAME.COMMENTS,
  },
];
</script>

<style lang="scss" scoped>
.container {
  padding: 0.5rem 0;
}
</style>
