import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  
    {
      path: '/fpassword',
      name: 'fpassword',
      component: () => import(/* webpackChunkName: "fpassword" */ '../views/fpassword.vue')
    },
    {
      path: '/Verfication',
      name: 'Verfication',
      component: () => import(/* webpackChunkName: "verfication" */ '../views/Verfication.vue')
    },
    {
      path: '/Code',
      name: 'Code',
      component: () => import(/* webpackChunkName: "Code" */ '../views/Code.vue')
    },
    {
      path: '/Resetpassword',
      name: 'Resetpassword',
      component: () => import(/* webpackChunkName: "Resetpassword" */ '../views/Resetpassword.vue')
    },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
