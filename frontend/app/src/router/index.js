import Vue from 'vue'
import VueRouter from 'vue-router'
import Create_process from '../views/Create_process.vue'
import List_processes from '../views/List_processes.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Create_process',
    component: Create_process
  },
  {
    path: '/list_processes',
    name: 'List_processes',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    //component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
    component: List_processes
  }
]

const router = new VueRouter({
  routes
})

export default router
