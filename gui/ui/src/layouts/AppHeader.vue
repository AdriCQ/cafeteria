<template>
    <header>
        <div class="container">
            <a class="logo" href="#"
                ><img src="/images/heading_logo.png" alt="Logo"
            /></a>

            <!-- <div class="right-area">
                <h6>
                    <a
                        class="plr-20 color-white btn-fill-primary"
                        href="tel:+53 55 555-55"
                        >CONTACTO: +53 55 555-555</a
                    >
                </h6>
            </div> -->
            <!-- right-area -->

            <a
                class="menu-nav-icon"
                @click="visible = !visible"
                style="color: white"
                ><i class="ion-navicon"></i
            ></a>

            <ul
                class="main-menu font-mountainsre"
                :class="{ 'visible-menu': visible }"
                id="main-menu"
            >
                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.HOME }"
                        >INICIO</router-link
                    >
                </li>
                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.MENU }"
                        >OFERTAS</router-link
                    >
                </li>
                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.EVENTS }"
                        >EVENTOS</router-link
                    >
                </li>
                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.NEWS }"
                        >NOTICIAS</router-link
                    >
                </li>
                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.CONTACT }"
                        >CONTACTO</router-link
                    >
                </li>

                <li @click="visible = false">
                    <router-link :to="{ name: ROUTE_NAME.ABOUT }"
                        >SOBRE NOSOTROS</router-link
                    >
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
        <!-- container -->
    </header>
</template>

<script lang="ts" setup>
import { ROUTE_NAME } from "src/router";
import { ref } from "vue";

const visible = ref(false);
</script>
