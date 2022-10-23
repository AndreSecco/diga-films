import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/Home.vue'
import Login from '../views/User/Login.vue'
import RegisterView from '../views/User/Register.vue'
import Guard from '../services/middleware'
import AllFilmsView from '../views/Films/AllFilmsView.vue'
import AllTagsView from '../views/Tags/AllTagsView.vue'
import AccountView from '../views/Panel/AccountView.vue'
import FilmsView from '../views/Panel/FilmsView.vue'
import TagsView from '../views/Panel/TagsView.vue'
import NewFilmView from '../views/Panel/NewFilmView.vue'
import UpdateFilmView from '../views/Panel/UpdateFilmView.vue'


const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    beforeEnter: Guard.auth,
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  },
  {
    path:'/allfilms',
    name: 'allfilms',
    component: AllFilmsView
  },
  {
    path:'/alltags',
    name: 'alltags',
    component: AllTagsView
  },
  {
    path:'/register',
    name: 'tegister',
    component: RegisterView
  },
  {
    path:'/account',
    name: 'account',
    component: AccountView
  },
  {
    path:'/account/films',
    name: 'films',
    component: FilmsView
  },
  {
    path:'/account/tags',
    name: 'tags',
    component: TagsView
  },
  {
    path:'/account/newfilm',
    name: 'newfilm',
    component: NewFilmView
  },
  {
    path:'/account/updatefilm/:idFilm',
    name: 'updatefilm',
    component: UpdateFilmView
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
