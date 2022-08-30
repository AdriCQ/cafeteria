import { RouteRecordRaw } from 'vue-router';
import { ROUTE_NAME } from './names';

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [{ path: '', component: () => import('pages/IndexPage.vue') }],
  },

  {
    path: '/login',
    name: ROUTE_NAME.LOGIN,
    component: () => import('layouts/AuthLayout.vue'),
    children: [{ path: '', component: () => import('pages/LoginPage.vue') }],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue'),
  },
];

export default routes;
