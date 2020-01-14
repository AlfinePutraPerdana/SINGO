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

Route::get('/', function () {
    return view('welcome');
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

Route::get('/tamu', function () {
    return view('mitra.ngo.tamu.tamu');
});

Route::get('/ajukan-tamu', function () {
    return view('mitra.ngo.tamu.ajukantamu');
});

Route::get('/list-tamu', function () {
    return view('mitra.ngo.tamu.listtamu');
});

Route::get('/revisi-tamu', function () {
    return view('mitra.ngo.tamu.revisitamu');
});

Route::get('/proses-tamu', function () {
    return view('mitra.ngo.tamu.prosestamu');
});

Route::get('/tambah-mitra', function () {
    return view('mitra.ngo.mitra.tambahmitra');
});

Route::get('/mitra', function () {
    return view('mitra.ngo.mitra.mitra');
});

Route::get('/tambah-monev', function () {
    return view('mitra.ngo.monev.tambahmonev');
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

Route::get('/ltk', function () {
    return view('mitra.ngo.LTK.ltk');
});

Route::get('/tambah-ltk', function () {
    return view('mitra.ngo.LTK.tambahltk');
});

Auth::routes();


Route::get('/', 'HomeController@index')->name('');
