<template>
    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="heading">
                <img
                    class="heading-img"
                    src="/images/heading_logo.png"
                    alt=""
                />
                <h2>Deje su Comentario</h2>
                <h5 class="mt-10 mb-30">
                    Hola estimado cliente, cuéntenos su experiencia
                </h5>
            </div>

            <form class="form-style-1 placeholder-1" @submit.prevent="onSubmit">
                <div class="row">
                    <div class="col-md-6">
                        <input
                            v-model="form.name"
                            class="mb-20"
                            type="text"
                            placeholder="Nombre"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            v-model="form.email"
                            class="mb-20"
                            type="email"
                            placeholder="E-mail"
                            required
                        />
                    </div>
                    <div class="col-md-12">
                        <textarea
                            v-model="form.content"
                            class="h-200x ptb-20"
                            placeholder="Mensaje"
                            required
                        ></textarea>
                    </div>
                </div>
                <!-- row -->

                <h6 class="center-text mtb-30" v-if="alert > 0">
                    <div class="alert alert-danger plr-25" v-if="alert === 1">
                        <b>No se pudo enviar el mensaje</b>
                    </div>
                    <div class="alert alert-success plr-25" v-if="alert === 2">
                        <b>Su mensaje ha sido enviado</b>
                    </div>
                </h6>
                <h6 class="center-text mtb-30">
                    <button type="submit" class="btn-primaryc plr-25">
                        <b>ENVIAR MENSAGE</b>
                    </button>
                </h6>
            </form>
        </div>
        <!-- container -->
    </section>
</template>

<script lang="ts" setup>
import { $router, ROUTE_NAME } from "src/router";
import { IMessageRequestStore, MessageService } from "src/services";
import { ref } from "vue";

const alert = ref(0);

const form = ref<IMessageRequestStore>({
    content: "",
    email: "",
    name: "",
    subject: "",
});

async function onSubmit() {
    alert.value = 0;
    try {
        const resp = await MessageService.store(form.value);
        form.value = {
            content: "",
            email: "",
            name: "",
            subject: "",
        };
        alert.value = 2;
        setTimeout(() => {
            $router.push({ name: ROUTE_NAME.HOME });
        }, 3500);
    } catch (error) {
        alert.value = 1;
    }
}
</script>
