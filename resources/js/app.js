/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);


import Create from './components/Create.vue';
import Delete from './components/Delete.vue';
import Index from './components/Index.vue';
import Edit from './components/Edit.vue';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-button', require('./components/MyButton.vue').default);
Vue.component('my-list', require('./components/MyList.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const






const router = new VueRouter({
    mode: 'history'
});
const app = new Vue(Vue.util.extend({
    router
})).$mount('#app');


const app = new Vue({
    el: '#app',
    data: {
        list: []
    },
    mounted: function () {
        fetch("http://127.0.0.1:8000/latihans").then(function (response) {
            return response.json();
        }).then(function (data) {
            console.log(data);
            this.list = data;
            console.log(this.list);

        }).catch(function (error) {
            console.log(error);
        });
    }
});
