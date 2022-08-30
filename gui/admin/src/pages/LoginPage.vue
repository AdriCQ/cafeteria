<template>
  <q-page padding>
    <q-card square class="q-py-md q-mx-auto" style="max-width: 380px">
      <!-- Title -->
      <q-card-section class="text-center">
        <div class="text-h6">Inicia sesión</div>
        <div class="text-body2 text-grey-9">
          Inserta tus datos para continuar
        </div>
      </q-card-section>
      <!-- / Title -->

      <!-- Form -->
      <q-form @submit.prevent="onSubmit">
        <q-card-section class="q-py-sm q-gutter-y-md">
          <q-input
            v-model="email"
            type="email"
            label="Correo electrónico *"
            color="dark"
            outlined
            class="q-mb-xs"
          >
            <template v-slot:prepend>
              <q-icon name="mdi-account" color="dark" size="20px" />
            </template>
          </q-input>

          <q-input
            v-model="password"
            type="password"
            label="Contraseña *"
            color="dark"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="mdi-key" color="dark" size="20px" />
            </template>
          </q-input>

          <div class="row justify-center">
            <q-btn
              label="Olvidaste tu contraseña?"
              color="primary"
              :ripple="false"
              flat
              no-caps
              class="text-subtitle2"
            />
          </div>
        </q-card-section>

        <q-card-actions align="center">
          <q-btn
            label="Entrar"
            type="submit"
            color="primary"
            unelevated
            class="full-width text-bold"
          />
        </q-card-actions>
      </q-form>
      <!-- / Form -->
    </q-card>
  </q-page>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const email = ref(null);
const password = ref(null);

const onSubmit = () => {
  console.log('Submit form');
};
</script>

<style lang="scss" scoped>
.q-page {
  padding: 6rem 1rem;
}
</style>
