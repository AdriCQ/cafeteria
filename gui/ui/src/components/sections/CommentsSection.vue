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
                <h2>Nuestros Seguidores</h2>
            </div>

            <div
                class="swiper-container"
                data-slide-effect="slide"
                data-autoheight="false"
                data-swiper-speed="500"
                data-swiper-margin="25"
                data-swiper-slides-per-view="3"
                data-swiper-breakpoints="true"
                data-scrollbar="true"
                data-swiper-loop="true"
                data-swpr-responsive="[1, 2, 2, 2]"
            >
                <div
                    class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text"
                >
                    <div
                        class="swiper-slide"
                        v-for="i in 5"
                        :key="`comment-${i}`"
                    >
                        <h4>Liz Manso</h4>
                        <p class="color-ash mb-50 mb-sm-30 mt-20">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Nostrum dolore est quos mollitia enim ab eius
                            odio odit dicta, ullam excepturi laudantium, aliquam
                            illum, culpa expedita minus recusandae perspiciatis
                            repudiandae.
                        </p>
                    </div>
                    <!-- swiper-slide -->
                </div>
                <!-- swiper-wrapper -->

                <div class="swiper-pagination"></div>
            </div>
            <!-- swiper-container -->
        </div>
        <!-- container -->
    </section>
</template>

<script setup lang="ts">
import { onMounted } from "vue";

onMounted(() => {
    // @ts-ignore
    enableSwiper();
});
</script>
