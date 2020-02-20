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

use App\Http\Controllers\TenagaController;

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

Route::get('/tenaga', 'TenagaController@index');

Route::get('/ajukan-tenaga', 'TenagaController@create' );

Route::post('/tenaga', 'TenagaController@store' );

Route::get('/tenaga/{id}/edit', 'TenagaController@edit' );

Route::post('/tenaga/send', 'TenagaController@send');

Route::post('/tenaga/{id}/update', 'TenagaController@update' );

Route::get('/revisi-tenaga', function () {
    return view('mitra.ngo.tenaga.revisitenaga');
});

Route::get('/list-tenaga', 'Master_tenagaController@index');

Route::get('/list-tenaga/{id}/edit', 'Master_tenagaController@edit');

Route::post('/list-tenaga/{id}/update', 'Master_tenagaController@update');

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

Route::post('/tambah-mitra/update', 'MitraController@update');

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

// ---------- Laporan Tahunan Dan Keuangan -------------------

Route::get('/ltk', 'ReportController@index');

Route::get('/ltk/new', 'ReportController@new');

Route::post('/ltk/store', 'ReportController@store');

Route::get('/ltk/edit/{id}', 'ReportController@edit');

Route::get('/ltk/delete/{id}', 'ReportController@delete');

Route::post('/ltk/update', 'ReportController@update');

Route::get('/lk', 'LapUangController@index');

Route::get('/lk/new', 'LapUangController@new');

Route::post('/lk/store', 'LapUangController@store');

Route::get('/data-keuangan', function () {
    return view('mitra.ngo.LTK.lihatkeuangan');
});

Route::get('/data-laporan', function () {
    return view('mitra.ngo.LTK.lihatlaporan');
});

// ------------------------------------------

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

//-------FASKER------
//Fasker--Tamu

Route::get('/verif-tamu', function () {
    return view('mitra.Fasker.Tamu_asing.verif_tamu');
});

Route::get('/master-tamu', function () {
    return view('mitra.Fasker.Tamu_asing.master_tamu');
});

Route::get('/history-tamu', function () {
    return view('mitra.Fasker.Tamu_asing.history_tamu');
});

//Fasker--Tenaga
Route::get('/verif-tenaga-asing', 'Verif_tenagaController@index');

Route::get('/verif-tenaga-asing/{id}/verifikasi', 'Verif_tenagaController@show');

Route::post('/verif-tenaga-asing/{id}/verifikasi', 'Verif_tenagaController@send');

Route::get('/master-tenaga-asing', 'Master_tenaga_faskerController@index');

Route::get('/master-tenaga-asing/{id}/edit', 'Master_tenaga_faskerController@edit');

Route::post('/master-tenaga-asing/{id}/update', 'Master_tenaga_faskerController@update');

Route::get('/history-tenaga-asing', function () {
    return view('mitra.Fasker.Tenaga_asing.history_tenaga');
});

//Fasker--NGO
Route::get('/verif-akun', function () {
    return view('mitra.Fasker.Ngo.verif_ngo');
});

Route::get('/master-ngo', function () {
    return view('mitra.Fasker.Ngo.master_ngo');
});

//Fasker--MitraLokal
Route::get('/verif-mitra-lokal', function () {
    return view('mitra.Fasker.Mitra_lokal.verif_mitra');
});

Route::get('/master-mitra-lokal', function () {
    return view('mitra.Fasker.Mitra_lokal.master_mitra');
});

//Fasker--Dokumentasi
Route::get('/master-artikel', function () {
    return view('mitra.Fasker.Dokumentasi.master_mitra');
});

Route::get('/verif-artikel', function () {
    return view('mitra.Fasker.Dokumentasi.master_mitra');
});

//Fasker--Monev
Route::get('/master-monev', function () {
    return view('mitra.Fasker.Monev.master_monev');
});

Route::get('/verif-monev', function () {
    return view('mitra.Fasker.Monev.verif_monev');
});

//Fasker--Rkt
Route::get('/verif-rkt', function () {
    return view('mitra.Fasker.Rkt.verif_rkt');
});

Route::get('/master-rkt', function () {
    return view('mitra.Fasker.Rkt.master_rkt');
});

//Fasker--Rik
Route::get('/master-rik', function () {
    return view('mitra.Fasker.RIK.master_rik');
});

//Fasker--Pajak
Route::get('/verif-bebas-pajak', function () {
    return view('mitra.Fasker.Bebas_pajak.verif_pajak');
});
///////////////////////////////////////////////////

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

// Route::get('/')
