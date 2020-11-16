import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css";
require("./bootstrap")
import BootstrapVue from "bootstrap-vue" //Importing
Vue.use(BootstrapVue) // Teslling Vue to use this whole application


Vue.use(VueRouter)
let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
