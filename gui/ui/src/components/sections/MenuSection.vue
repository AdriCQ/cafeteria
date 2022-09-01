<template>
    <section class="bg-lite-blue">
        <div class="container">
            <div class="row" v-for="i in 3" :key="i">
                <div class="col-md-6" v-for="j in 6" :key="`offer-${i}-${j}`">
                    <div class="sided-90x mb-30">
                        <div class="s-left">
                            <img
                                class="br-3"
                                src="/images/heading_logo.png"
                                alt="Offer Image"
                            />
                        </div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10">
                                <b>Offer {{ `${i}${j}` }}</b
                                ><b class="color-primary float-right"
                                    >${{ i }}0.00</b
                                >
                            </h5>
                            <p class="pr-70">
                                Maecenas fermentum tortor id fringilla molestie.
                                In hac habitasse platea dictumst.
                            </p>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
</template>
