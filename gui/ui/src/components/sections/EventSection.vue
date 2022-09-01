<template>
    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-12">
                    <div class="mb-50 mb-sm-30" v-for="i in 3" :key="i">
                        <div class="pos-relative mb-30 pt-15">
                            <div
                                class="font-8 abs-tl p-20 bg-primary color-white"
                            >
                                <h4>
                                    <b>{{ i }} de Septiembre</b>
                                </h4>
                                <div class="brdr-style-1"></div>
                            </div>
                            <img :src="`/images/ev-${i}.jpg`" alt="" />
                        </div>
                        <h4>
                            <a href="#"><b>Lorem ipsum dolor sit </b></a>
                        </h4>
                        <!-- <h6 class="mt-10 bg-lite-blue dplay-inl-block">
                            <a class="plr-20 mtb-10" href="#"
                                ><b>Miércoles 31 de Agosto</b></a
                            >
                        </h6> -->
                        <p
                            class="mt-30"
                            v-for="p in 4"
                            :key="`paragraph-${i}-${p}`"
                        >
                            Proin dictum viverra varius. Etiam vulputate libero
                            dui, at pretium elit elementum quis. Enean porttitor
                            eros non ultrices convallis. Vivamus quis dolor ut
                            arcu lobortis finibus a vitae leo. Sed eget tempus
                            sem. Nullam sed lacus sed metus tincidunt lobortis
                            lobortis at nibh. Morbi euismod, arcu in gravida
                            rhoncus
                        </p>
                    </div>
                    <!--mb-30-->
                </div>
                <!--col-md-8-->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
</template>
