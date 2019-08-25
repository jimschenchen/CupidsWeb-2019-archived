/* eslint-disable */
import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/home/Home'
Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '@/pages/admin/Login')
    },
    {
      path: '/registar',
      name: 'Registar',
      component: () => import(/* webpackChunkName: "about" */ '@/pages/admin/Registar')
    },
    {
      path: '/admin',
      name: 'Admin',
      component: () => import(/* webpackChunkName: "about" */ '@/pages/admin/Admin')
    }
  ]
})
