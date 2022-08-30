<template>
    <section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="dplay-tbl-cell center-text color-white">
                    <h1 class="mt-30 mb-15">Jagua - Bit</h1>
                    <h5>
                        <router-link
                            :to="{ name: ROUTE_NAME.MENU }"
                            class="btn-primaryc mt-25 plr-25"
                            ><b>Nuestras Ofertas</b></router-link
                        >
                    </h5>
                </div>
                <!-- dplay-tbl-cell -->
            </div>
            <!-- dplay-tbl -->
        </div>
        <!-- container -->
    </section>
</template>

<script lang="ts" setup>
import { ROUTE_NAME } from "src/router";
</script>
