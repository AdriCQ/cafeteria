<template>
    <section
        v-if="dense"
        class="story-area bg-default color-white pos-relative"
        :style="`background: url(${
            bg ? bg : '/ui/images/title-img.jpg'
        }) no-repeat center`"
    >
        <div class="pos-bottom triangle-up" v-if="divisorBottom"></div>
        <div class="pos-top triangle-bottom" v-if="divisorTop"></div>
        <!-- <div class="container">
            <h4 class="font-30 font-sm-20 center-text mb-25">JaguaBIT</h4>
        </div> -->
        <!-- container -->
    </section>

    <section
        v-else
        class="bg-default h-500x main-slider pos-relative"
        :style="`background: url(${
            bg ? bg : '/ui/images/title-img.jpg'
        }) no-repeat center`"
    >
        <div class="pos-bottom triangle-up" v-if="divisorBottom"></div>
        <div class="pos-top triangle-bottom" v-if="divisorTop"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="dplay-tbl-cell center-text color-white pt-90">
                    <!-- <h5>JaguaBIT</h5> -->
                    <h2 class="mt-30 mb-15" v-if="$props.subtitle">
                        {{ $props.subtitle }}
                    </h2>
                </div>
                <!-- dplay-tbl-cell -->
            </div>
            <!-- dplay-tbl -->
        </div>
        <!-- container -->
    </section>
</template>

<script setup lang="ts">
const $props = defineProps<{
    dense?: boolean;
    bg?: string;
    title?: string;
    subtitle?: string;
    divisorTop?: boolean;
    divisorBottom?: boolean;
}>();
</script>
