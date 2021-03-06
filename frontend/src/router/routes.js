import DashboardLayout from "@/components/layout/DashboardLayout.vue";
import BasicLayout from "@/components/layout/BasicLayout.vue";
// GeneralViews
import NotFound from "@/components/pages/NotFoundPage.vue";

// Admin pages
// import Dashboard from "@/pages/Dashboard.vue";
import Home from "@/components/pages/Home.vue";
import Login from "@/components/pages/auth/Login.vue";

const routes = [
  {
    path: "/",
    component: DashboardLayout,
    redirect: "/home",
    children: [
      {
        path: "home",
        name: "home",
        component: Home
      }
    ]
  },
  {
    path: "/login",
    name: "login",
    component: Login
  },
  { path: "*", component: NotFound }
];

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes;
