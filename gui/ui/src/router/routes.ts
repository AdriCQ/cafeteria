import { RouteRecordRaw } from "vue-router";
import { ROUTE_NAME } from "./names";

import HomePage from "src/pages/HomePage.vue";
import AboutUsPage from "src/pages/AboutUsPage.vue";
import ContactPage from "src/pages/ContactPage.vue";
import MenuPage from "src/pages/MenuPage.vue";
import NewsPage from "src/pages/NewsPage.vue";
import MainLayout from "src/layouts/MainLayout.vue";
/**
 * routes
 */
export const routes: RouteRecordRaw[] = [
    {
        path: "",
        component: MainLayout,
        children: [
            {
                path: "",
                name: ROUTE_NAME.HOME,
                component: HomePage,
            },
            {
                path: "menu",
                name: ROUTE_NAME.MENU,
                component: MenuPage,
            },
            {
                path: "about",
                name: ROUTE_NAME.ABOUT,
                component: AboutUsPage,
            },
            {
                path: "news",
                name: ROUTE_NAME.NEWS,
                component: NewsPage,
            },
            {
                path: "contact",
                name: ROUTE_NAME.CONTACT,
                component: ContactPage,
            },
        ],
    },
];
