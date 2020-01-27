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
Vue.component('lihat-rencana', require('./components/rkt/Lihat_draft.vue').default);

Vue.component('tenaga-kerja', require('./components/tenaga/Tenaga_kerja.vue').default);
Vue.component('ajukan-tenaga', require('./components/tenaga/Ajukan_tenaga.vue').default);
Vue.component('revisi-tenaga', require('./components/tenaga/Revisi_tenaga.vue').default);
Vue.component('proses-tenaga', require('./components/tenaga/Proses_tenaga.vue').default);
Vue.component('list-tenaga', require('./components/tenaga/List_tenaga.vue').default);
Vue.component('history-tenaga', require('./components/tenaga/History_tenaga.vue').default);
Vue.component('lihat-tenaga', require('./components/tenaga/Lihat_tenaga.vue').default);

Vue.component('tamu-asing', require('./components/tamu/Tamu_asing.vue').default);
Vue.component('ajukan-tamu', require('./components/tamu/Ajukan_tamu.vue').default);
Vue.component('revisi-tamu', require('./components/tamu/Revisi_tamu.vue').default);
Vue.component('proses-tamu', require('./components/tamu/Proses_tamu.vue').default);
Vue.component('list-tamu', require('./components/tamu/List_tamu.vue').default);
Vue.component('history-tamu', require('./components/tamu/History_tamu.vue').default);
Vue.component('lihat-tamu', require('./components/tamu/Lihat_tamu.vue').default);

Vue.component('instansi-lokal', require('./components/instansi/Instansi_lokal.vue').default);
Vue.component('tambah-instansi', require('./components/instansi/Tambah_instansi.vue').default);
Vue.component('lihat-instansi', require('./components/instansi/Lihat_instansi.vue').default);

Vue.component('list-monev', require('./components/monev/Monev.vue').default);
Vue.component('tambah-monev', require('./components/monev/Tambah_monev.vue').default);
Vue.component('lihat-monev', require('./components/monev/Lihat_monev.vue').default);

Vue.component('tambah-laporan', require('./components/ltk/Tambah_laporan.vue').default);
Vue.component('laporan-tahunan', require('./components/ltk/Laporan_tahunan.vue').default);
Vue.component('tambah-keuangan', require('./components/ltk/Tambah_keuangan.vue').default);
Vue.component('laporan-keuangan', require('./components/ltk/List_keuangan.vue').default);
Vue.component('lihat-keuangan', require('./components/ltk/Lihat_keuangan.vue').default);
Vue.component('lihat-laporan', require('./components/ltk/Lihat_laporan.vue').default);

Vue.component('dok-artikel', require('./components/dokumentasi/Artikel.vue').default);
Vue.component('tambah-artikel', require('./components/dokumentasi/Tambah_artikel.vue').default);
Vue.component('ubah-artikel', require('./components/dokumentasi/Revisi_artikel.vue').default);

Vue.component('rencana-induk', require('./components/rik/Rencana_induk.vue').default);
Vue.component('tambah-kegiatan', require('./components/rik/Tambah_rencana.vue').default);
Vue.component('draft-rik', require('./components/rik/Draft_induk.vue').default);

Vue.component('bebas-pajak', require('./components/pajak/Pajak.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
