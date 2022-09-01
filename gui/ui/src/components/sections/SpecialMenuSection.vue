<template>
    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
            <div class="heading">
                <img
                    class="heading-img"
                    src="/images/heading_logo.png"
                    alt=""
                />
                <h2>Ofertas Especiales</h2>
            </div>

            <div class="row">
                <div
                    class="col-lg-3 col-md-4 col-sm-6"
                    v-for="i in 4"
                    :key="`offer-${i}`"
                >
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative">
                            <h6 class="ribbon-cont">
                                <div class="ribbon primary"></div>
                                <b>ESPECIAL</b>
                            </h6>
                            <img src="/images/compact-disk.png" alt="" />
                        </div>
                        <h5 class="mt-20">Nombre-Oferta</h5>
                        <h4 class="mt-5"><b>$11.90</b></h4>
                    </div>
                    <!--text-center-->
                </div>
                <!-- col-md-3 -->
            </div>
            <!-- row -->

            <h6 class="center-text mt-40 mt-sm-20 mb-30">
                <router-link
                    :to="{ name: ROUTE_NAME.MENU }"
                    class="btn-primaryc plr-25"
                    ><b>Nuestras Ofertas</b></router-link
                >
            </h6>
        </div>
        <!-- container -->
    </section>
</template>

<script lang="ts" setup>
import { ROUTE_NAME } from "src/router";
</script>
