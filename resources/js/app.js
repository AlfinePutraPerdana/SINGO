/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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
Vue.component('proses-rencana-kerja', require('./components/rkt/Proses_rkt_draft.vue').default);
Vue.component('rencana-kerja', require('./components/rkt/Rencana_kerja.vue').default);
Vue.component('tambah-rencana', require('./components/rkt/Tambah_rkt.vue').default);
Vue.component('revisi-rencana', require('./components/rkt/Revisi_rkt.vue').default);
Vue.component('draft-rencana', require('./components/rkt/Draft_rkt.vue').default);

Vue.component('tenaga-kerja', require('./components/tenaga/Tenaga_kerja.vue').default);
Vue.component('ajukan-tenaga', require('./components/tenaga/Ajukan_tenaga.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
