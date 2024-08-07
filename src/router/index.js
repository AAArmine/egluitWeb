import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../views/HomePage.vue";
import AboutPage from "../views/AboutPage.vue";
import ContactPage from "../views/ContactPage.vue";
import BenefitPage from "../views/ServicesPage.vue";
import AdminEntry from "../views/AdminEntry.vue";


const routes = [
  {
    path: "/",
    name: "Home",
    component: HomePage,
  },
  {
    path: "/about",
    name: "About",
    component: AboutPage,
  },
  {
    path: "/contact",
    name: "Contact",
    component: ContactPage,
  },
  {
    path: "/services",
    name: "ServicesPage",
    component: BenefitPage,
  },
  {
    path: "/admin",
    name: "Admin",
    component: AdminEntry,
    children: [
      {
        path: "", // Default admin route
        name: "AdminDashboard",
        component: () => import("../views/AdminDashboard.vue"),
      },
      // Add other admin routes here
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
