import { RouteRecordRaw } from "vue-router";
import { ROUTE_NAME } from "./names";

import HomePage from "src/pages/HomePage.vue";
import AboutUsPage from "src/pages/AboutUsPage.vue";
import ContactPage from "src/pages/ContactPage.vue";
import MenuPage from "src/pages/MenuPage.vue";
import NewsPage from "src/pages/NewsPage.vue";
import EventsPage from "src/pages/EventsPage.vue";
import MainLayout from "src/layouts/MainLayout.vue";
import { scrollTop } from "src/helpers";
/**
 * routes
 */
export const routes: RouteRecordRaw[] = [
    {
        path: "",
        component: MainLayout,
        beforeEnter: () => scrollTop(),
        children: [
            {
                path: "",
                name: ROUTE_NAME.HOME,
                component: HomePage,
                beforeEnter: () => scrollTop(),
            },
            {
                path: "menu",
                name: ROUTE_NAME.MENU,
                component: MenuPage,
                beforeEnter: () => scrollTop(),
            },
            {
                path: "about",
                name: ROUTE_NAME.ABOUT,
                component: AboutUsPage,
                beforeEnter: () => scrollTop(),
            },
            {
                path: "news",
                name: ROUTE_NAME.NEWS,
                component: NewsPage,
                beforeEnter: () => scrollTop(),
            },
            {
                path: "events",
                name: ROUTE_NAME.EVENTS,
                component: EventsPage,
                beforeEnter: () => scrollTop(),
            },
            {
                path: "contact",
                name: ROUTE_NAME.CONTACT,
                component: ContactPage,
                beforeEnter: () => scrollTop(),
            },
        ],
    },
];
