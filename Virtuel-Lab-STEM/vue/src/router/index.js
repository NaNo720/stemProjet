import { createRouter, createWebHistory } from "vue-router";

import Acceuil from "../views/publiclaout/Acceuil.vue";
import Public from "../views/publiclaout/Public.vue";

import AdminLayout from "../views/adminlayout/Layout.vue";
import Use from "../views/adminlayout/Use.vue";

import Connexion from "../views/logSign/Connexion.vue";
import Inscription from "../views/logSign/Inscription.vue";


import store from "../store";
import ExampleRedirect from "@/components/ExampleRedirect.vue";

const routes = [
  {
    path: "/",
    name: "Public",
    component: Public,
    children: [{ path: "/", name: "Acceuil", component: Acceuil }],
  },

  {
    path: "/adminlayout",
    name: "adminlayout",
    component: AdminLayout,
    meta: { requiresAuth: true },
    children: [{ path: "Use", name: "Use", component: Use }],
  },

  {
    path: "/Connexion",
    name: "Connexion",
    component: Connexion,
  },

  {
    path: "/Inscription",
    name: "Inscription",
    component: Inscription,
  },

  {
    path: "/example",
    name: "Example",
    component: ExampleRedirect,
  },

  {
    path: "/:pathMasth(.*)*",
    redirect: "/",
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,

  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return {
        el: to.hash,
        behavior: "smooth",
      };
    }
    return { top: 0 };
  },
});

router.beforeEach((to,from,next)=>{
  if(to.meta.requiresAuth && !store.state.user.token){
    next({ name: 'Connexion' });
  }else if (store.state.user.token && (to.name === 'Connexion' || to.name === 'Inscription')) {
    next({ name: "Use"});
  }else{
    next()
  }
})
export default router;
