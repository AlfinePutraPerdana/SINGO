<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// NGO

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/rkt', function () {
    return view('mitra.ngo.RKT.rkt');
});

Route::get('/draft-rkt', function () {
    return view('mitra.ngo.RKT.draftrkt');
});

Route::get('/tambah-rkt', function () {
    return view('mitra.ngo.RKT.tambahrkt');
});

Route::get('/data-rkt', function () {
    return view('mitra.ngo.RKT.lihatdata');
});

Route::get('/revisi-rkt-draft', function () {
    return view('mitra.ngo.RKT.revisirktdraft');
});

Route::get('/proses-rkt-draft', function () {
    return view('mitra.ngo.RKT.prosesrktdraft');
});

Route::get('/tenaga', function () {
    return view('mitra.ngo.tenaga.tenaga');
});

Route::get('/ajukan-tenaga', function () {
    return view('mitra.ngo.tenaga.ajukantenaga');
});

Route::get('/revisi-tenaga', function () {
    return view('mitra.ngo.tenaga.revisitenaga');
});

Route::get('/proses-tenaga', function () {
    return view('mitra.ngo.tenaga.prosestenaga');
});

Route::get('/list-tenaga', function () {
    return view('mitra.ngo.tenaga.listtenaga');
});

Route::get('/data-tenaga', function () {
    return view('mitra.ngo.tenaga.lihatdata');
});

Route::get('/history-tenaga', function () {
    return view('mitra.ngo.tenaga.historytenaga');
});

Route::get('/tamu', function () {
    return view('mitra.ngo.tamu.tamu');
});

Route::get('/ajukan-tamu', function () {
    return view('mitra.ngo.tamu.ajukantamu');
});

Route::get('/list-tamu', function () {
    return view('mitra.ngo.tamu.listtamu');
});

Route::get('/data-tamu', function () {
    return view('mitra.ngo.tamu.lihatdata');
});

Route::get('/history-tamu', function () {
    return view('mitra.ngo.tamu.historytamu');
});

Route::get('/revisi-tamu', function () {
    return view('mitra.ngo.tamu.revisitamu');
});

Route::get('/proses-tamu', function () {
    return view('mitra.ngo.tamu.prosestamu');
});

Route::get('/tambah-mitra', 'MitraController@index');

Route::post('/tambah-mitra', 'MitraController@store');

Route::get('/tambah-mitra/{id}/edit', 'MitraController@edit');

Route::post('/tambah-mitra/{id}/update', 'MitraController@update');

// Route::get('/tambah-mitra', 'Mitra2Controller@index');

// Route::post('/tambah-mitra', 'Mitra2Controller@store');

// Route::get('/tambah-mitra/{id}', 'Mitra2Controller@edit');

// Route::post('/tambah-mitra/update', 'Mitra2Controller@update');

Route::get('/data-mitra', function () {
    return view('mitra.ngo.mitra.lihatmitra');
});

Route::get('/mitra', function () {
    return view('mitra.ngo.mitra.mitra');
});

Route::get('/tambah-monev', function () {
    return view('mitra.ngo.monev.tambahmonev');
});

Route::get('/data-monev', function () {
    return view('mitra.ngo.monev.lihatmonev');
});

Route::get('/monev', function () {
    return view('mitra.ngo.monev.monev');
});

Route::get('/artikel', function () {
    return view('mitra.ngo.dokumentasi.artikel');
});

Route::get('/tambah-artikel', function () {
    return view('mitra.ngo.dokumentasi.tambahartikel');
});

Route::get('/revisi-artikel', function () {
    return view('mitra.ngo.dokumentasi.revisiartikel');
});

Route::get('/ltk', function () {
    return view('mitra.ngo.LTK.ltk');
});

Route::get('/tambah-ltk', function () {
    return view('mitra.ngo.LTK.tambahltk');
});

Route::get('/lk', function () {
    return view('mitra.ngo.LTK.keuangan');
});

Route::get('/tambah-laporan', function () {
    return view('mitra.ngo.LTK.tambahkeuangan');
});

Route::get('/data-keuangan', function () {
    return view('mitra.ngo.LTK.lihatkeuangan');
});

Route::get('/data-laporan', function () {
    return view('mitra.ngo.LTK.lihatlaporan');
});

Route::get('/dokumen-induk', function () {
    return view('mitra.ngo.RIK.dokumeninduk');
});

Route::get('/tambah-dokumen', function () {
    return view('mitra.ngo.RIK.tambahdokumen');
});

Route::get('/revisi-dokumen', function () {
    return view('mitra.ngo.RIK.revisidokumen');
});

Route::get('/tambah-kegiatan', function () {
    return view('mitra.ngo.RIK.tambahrencana');
});

Route::get('/revisi-kegiatan', function () {
    return view('mitra.ngo.RIK.revisirencana');
});

Route::get('/draft-rik', function () {
    return view('mitra.ngo.RIK.draftrik');
});

Route::get('/pajak', function () {
    return view('mitra.ngo.pajak.pajak');
});

Route::get('/profile', function () {
    return view('mitra.ngo.profile.profile');
});

Route::get('/logout', function () {
    return view('mitra.ngo.logout.logout');
});

// Satker

Route::get('/satker/rkt', function () {
    return view('mitra.satker.RKT.rkt');
});

Route::get('/satker/draft-rkt', function () {
    return view('mitra.satker.RKT.draftrkt');
});

Route::get('/satker/data-rkt', function () {
    return view('mitra.satker.RKT.lihatdata');
});

Route::get('/satker/verifikasi', function () {
    return view('mitra.satker.RKT.verifrktdraft');
});

Route::get('/satker/tenaga', function () {
    return view('mitra.satker.tenaga.tenaga');
});

Route::get('/satker/ajukan-tenaga', function () {
    return view('mitra.satker.tenaga.ajukantenaga');
});

Route::get('/satker/revisi-tenaga', function () {
    return view('mitra.satker.tenaga.revisitenaga');
});

Route::get('/satker/list-tenaga', function () {
    return view('mitra.satker.tenaga.listtenaga');
});

Route::get('/satker/data-tenaga', function () {
    return view('mitra.satker.tenaga.lihatdata');
});

Route::get('/satker/history-tenaga', function () {
    return view('mitra.satker.tenaga.historytenaga');
});

Route::get('/satker/tamu', function () {
    return view('mitra.satker.tamu.tamu');
});

Route::get('/satker/ajukan-tamu', function () {
    return view('mitra.satker.tamu.ajukantamu');
});

Route::get('/satker/list-tamu', function () {
    return view('mitra.satker.tamu.listtamu');
});

Route::get('/satker/data-tamu', function () {
    return view('mitra.satker.tamu.lihatdata');
});

Route::get('/satker/history-tamu', function () {
    return view('mitra.satker.tamu.historytamu');
});

Route::get('/satker/revisi-tamu', function () {
    return view('mitra.satker.tamu.revisitamu');
});


Auth::routes();

//Fasker--Tamu
Route::get('/verif-tamu', function () {
    return view('mitra.Fasker.Tamu_asing.verif_tamu');
});

Route::get('/master-tamu', function () {
    return view('mitra.Fasker.Tamu_asing.master_tamu');
});

//DASHBOARD

Route::get('/dashboard', function(){
    return view('dashboard.index');
});
Route::get('/login', function(){
    return view('dashboard.login');
});
Route::get('/register', function(){
    return view('dashboard.register');
});
Route::get('/news', function(){
    return view('dashboard.news');
});
Route::get('/blog-details', function(){
    return view('dashboard.blog-details');
});
