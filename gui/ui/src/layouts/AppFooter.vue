<template>
    <footer class="pb-50 pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
            <router-link to=""
                ><img src="/images/heading_logo.png" alt="Logo"
            /></router-link>

            <div class="pt-30">
                <p class="underline-secondary"><b>Dirección:</b></p>
                <p>Ave 55 #5555 entre Calle 55 y Calle 55</p>
            </div>

            <div class="pt-30">
                <p class="underline-secondary mb-10"><b>Teléfono:</b></p>
                <a href="tel:+53 55555555">+53 55 555-555 </a>
            </div>

            <div class="pt-30">
                <p class="underline-secondary mb-10"><b>Email:</b></p>
                <a href="mailto:yourmail@gmail.com"> yourmail@gmail.com</a>
            </div>

            <ul class="icon mt-30">
                <li>
                    <a href="#"><i class="ion-social-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-linkedin"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-vimeo"></i></a>
                </li>
            </ul>

            <p class="color-light font-9 mt-50 mt-sm-30">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                {{ new Date().getFullYear() }}
                Todos los Derechos Reservados | Hecho con
                <i class="ion-heart" aria-hidden="true"></i> por
                <a href="https://github.com/AdriCQ">AdriCQ</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
        <!-- container -->
    </footer>
</template>
