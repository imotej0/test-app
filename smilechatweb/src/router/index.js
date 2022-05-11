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
    {
      path: '/HomeScreen',
      name: 'HomeScreen',
      component: () => import(/* webpackChunkName: "HomeScreen" */ '../views/HomeScreen.vue')
    },
    {
      path: '/Profile',
      name: 'Profile',
      component: () => import(/* webpackChunkName: "Profile" */ '../views/Profile.vue')
    },
    {
      path: '/Messages',
      name: 'Messages',
      component: () => import(/* webpackChunkName: "Profile" */ '../views/Messages.vue')
    },
    {
      path: '/Proba',
      name: 'Proba',
      component: () => import(/* webpackChunkName: "Proba" */ '../views/Proba.vue')
    },
    {
      path: '/explore',
      name: 'explore',
      component: () => import(/* webpackChunkName: "explore" */ '../views/explore.vue')
    },
    {
      path: '/Notification',
      name: 'Notification',
      component: () => import(/* webpackChunkName: "Notification" */ '../views/Notification.vue')
    },
    {
      path: '/shere',
      name: 'shere',
      component: () => import(/* webpackChunkName: "Share" */ '../views/shere.vue')
    },
    {
      path: '/Comments',
      name: 'Comments',
      component: () => import(/* webpackChunkName: "Comments" */ '../views/Comments.vue')
    },
    
    
    
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
