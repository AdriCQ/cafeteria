<template>
    <title-section title="Nombre-Cafeteria" subtitle="Sobre Nosotros" />

    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="mb-30" src="/images/about-1.jpg" alt="" />
                </div>
                <div class="col-md-6">
                    <img class="mb-30" src="/images/about-2.jpg" alt="" />
                </div>
                <div class="col-md-12">
                    <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text">
                        <h2>Somos Jagua Bit</h2>
                    </div>

                    <h5 class="center-text mb-50 mb-sm-30 plr-25">
                        Maecenas fermentum tortor id fringilla molestie. In hac
                        habitasse platea dictumst. Morbi maximus lobortis ipsum,
                        ut blandit augue ullamcorper vitae. Nulla dignissim leo
                        felis, eget cursus elit aliquet ut.
                    </h5>
                </div>
                <div class="col-md-6">
                    <p class="mb-15">
                        Maecenas fermentum tortor id fringilla molestie. In hac
                        habitasse platea dictumst. Morbi maximus lobortis ipsum,
                        ut blandit augue ullamcorper vitae. Nulla dignissim leo
                        felis, eget cursus elit aliquet ut. Curabitur vel
                        convallis massa. Morbi tellus ortor, luctus et lacinia
                        non, tincidunt in lacus. Vivamus sed ligula imperdiet,
                        feugiat magna vitae, blandit ex. Vestibulum id dapibus
                        dolor, ac cursus nulla.
                    </p>
                </div>
                <!-- col-md-6 -->

                <div class="col-md-6">
                    <p class="mb-15">
                        Maecenas fermentum tortor id fringilla molestie. In hac
                        habitasse platea dictumst.Morbi maximus lobortis ipsum,
                        ut blandit augue ullamcorper vitae. Nulla dignissim leo
                        felis, eget cursus elit aliquet ut. Curabitur vel
                        convallismassa. Morbi tellus tortor, luctus et lacinia
                        non, tincidunt in lacus. Vivamus sed ligula imperdiet,
                        feugiat magna vitae, blandit ex. Vestibulumidda pibus
                        dolor, accursus nulla.
                    </p>
                </div>
                <!-- col-md-6 -->
            </div>
            <!-- row -->

            <h6 class="center-text mt-40 mt-sm-30 mb-20">
                <router-link
                    :to="{ name: ROUTE_NAME.MENU }"
                    class="btn-primaryc plr-25 mb-10 mlr-5"
                    ><b>Revise Nuestras Ofertas</b></router-link
                >
            </h6>
        </div>
        <!-- container -->
    </section>
    <comments-section />
    <contact-section />
</template>

<script setup lang="ts">
import TitleSection from "src/components/sections/TitleSection.vue";
import ContactSection from "src/components/sections/ContactSection.vue";
import CommentsSection from "src/components/sections/CommentsSection.vue";
import { ROUTE_NAME } from "src/router";
</script>
