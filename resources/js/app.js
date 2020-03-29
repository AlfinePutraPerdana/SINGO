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

import Tambah_instansi from './components/ngo/instansi/Tambah_instansi.vue';

const routes = [
    {
        name: 'Tambah',
        path: '/tambah-mitra',
        component: Tambah_mitra
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//-----NGO------

Vue.component('ngo-home', require('./components/ngo/beranda/beranda.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('proses-rencana-kerja', require('./components/ngo/rkt/Proses_rkt_draft.vue').default);
Vue.component('rencana-kerja', require('./components/ngo/rkt/Rencana_kerja.vue').default);
Vue.component('tambah-rencana', require('./components/ngo/rkt/Tambah_rkt.vue').default);
Vue.component('revisi-rencana', require('./components/ngo/rkt/Revisi_rkt.vue').default);
Vue.component('draft-rencana', require('./components/ngo/rkt/Draft_rkt.vue').default);
Vue.component('lihat-rencana', require('./components/ngo/rkt/Lihat_draft.vue').default);

Vue.component('tenaga-kerja', require('./components/ngo/tenaga/Tenaga_kerja.vue').default);
Vue.component('ajukan-tenaga', require('./components/ngo/tenaga/Ajukan_tenaga.vue').default);
Vue.component('revisi-tenaga', require('./components/ngo/tenaga/Revisi_tenaga.vue').default);
Vue.component('proses-tenaga', require('./components/ngo/tenaga/Proses_tenaga.vue').default);
Vue.component('list-tenaga', require('./components/ngo/tenaga/List_tenaga.vue').default);
Vue.component('history-tenaga', require('./components/ngo/tenaga/History_tenaga.vue').default);
Vue.component('lihat-tenaga', require('./components/ngo/tenaga/Lihat_tenaga.vue').default);

Vue.component('tamu-asing', require('./components/ngo/tamu/Tamu_asing.vue').default);
Vue.component('ajukan-tamu', require('./components/ngo/tamu/Ajukan_tamu.vue').default);
Vue.component('revisi-tamu', require('./components/ngo/tamu/Revisi_tamu.vue').default);
Vue.component('proses-tamu', require('./components/ngo/tamu/Proses_tamu.vue').default);
Vue.component('list-tamu', require('./components/ngo/tamu/List_tamu.vue').default);
Vue.component('history-tamu', require('./components/ngo/tamu/History_tamu.vue').default);
Vue.component('lihat-tamu', require('./components/ngo/tamu/Lihat_tamu.vue').default);

Vue.component('instansi-lokal', require('./components/ngo/instansi/Instansi_lokal.vue').default);
Vue.component('tambah-instansi', require('./components/ngo/instansi/Tambah_instansi.vue').default);
Vue.component('lihat-instansi', require('./components/ngo/instansi/Lihat_instansi.vue').default);

Vue.component('list-monev', require('./components/ngo/monev/Monev.vue').default);
Vue.component('tambah-monev', require('./components/ngo/monev/Tambah_monev.vue').default);
Vue.component('lihat-monev', require('./components/ngo/monev/Lihat_monev.vue').default);

Vue.component('tambah-laporan', require('./components/ngo/ltk/Tambah_laporan.vue').default);
Vue.component('laporan-tahunan', require('./components/ngo/ltk/Laporan_tahunan.vue').default);
Vue.component('tambah-keuangan', require('./components/ngo/ltk/Tambah_keuangan.vue').default);
Vue.component('laporan-keuangan', require('./components/ngo/ltk/Laporan_keuangan.vue').default);
Vue.component('lihat-keuangan', require('./components/ngo/ltk/Lihat_keuangan.vue').default);
Vue.component('lihat-laporan', require('./components/ngo/ltk/Lihat_laporan.vue').default);

Vue.component('dok-artikel', require('./components/ngo/dokumentasi/Artikel.vue').default);
Vue.component('tambah-artikel', require('./components/ngo/dokumentasi/Tambah_artikel.vue').default);
Vue.component('ubah-artikel', require('./components/ngo/dokumentasi/Revisi_artikel.vue').default);

Vue.component('dokumen-induk', require('./components/ngo/rik/Dokumen_induk.vue').default);
Vue.component('tambah-dokumen', require('./components/ngo/rik/Tambah_dokumen.vue').default);
Vue.component('revisi-dokumen', require('./components/ngo/rik/Revisi_dokumen.vue').default);
Vue.component('draft-rik', require('./components/ngo/rik/Rencana_induk.vue').default);
Vue.component('rencana-induk', require('./components/ngo/rik/Tambah_induk.vue').default);
Vue.component('revisi-induk', require('./components/ngo/rik/Revisi_induk.vue').default);

Vue.component('bebas-pajak', require('./components/ngo/pajak/Pajak.vue').default);

Vue.component('data-profile', require('./components/ngo/profile/Profile.vue').default);


//-----Satker------

Vue.component('rencana-tahunan', require('./components/satker/rkt/Rencana_kerja.vue').default);
Vue.component('verif-rkt', require('./components/satker/rkt/Verif_rkt.vue').default);
Vue.component('draft-rkt', require('./components/satker/rkt/Draft_rkt.vue').default);
Vue.component('lihat-rkt', require('./components/satker/rkt/Lihat_draft.vue').default);

Vue.component('tenaga-kerja-asing', require('./components/satker/tenaga/Tenaga_kerja.vue').default);
Vue.component('ajukan-tenaga-asing', require('./components/satker/tenaga/Ajukan_tenaga.vue').default);
Vue.component('revisi-tenaga-asing', require('./components/satker/tenaga/Revisi_tenaga.vue').default);
Vue.component('list-tenaga-asing', require('./components/satker/tenaga/List_tenaga.vue').default);
Vue.component('history-tenaga-asing', require('./components/satker/tenaga/History_tenaga.vue').default);
Vue.component('lihat-tenaga-asing', require('./components/satker/tenaga/Lihat_tenaga.vue').default);

Vue.component('tamu-asing-asing', require('./components/satker/tamu/Tamu_asing.vue').default);
Vue.component('ajukan-tamu-asing', require('./components/satker/tamu/Ajukan_tamu.vue').default);
Vue.component('revisi-tamu-asing', require('./components/satker/tamu/Revisi_tamu.vue').default);
Vue.component('list-tamu-asing', require('./components/satker/tamu/List_tamu.vue').default);
Vue.component('history-tamu-asing', require('./components/satker/tamu/History_tamu.vue').default);
Vue.component('lihat-tamu-asing', require('./components/satker/tamu/Lihat_tamu.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
