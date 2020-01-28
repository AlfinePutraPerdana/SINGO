<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_rkt','judul','pendahuluan', 'capaian','peran_serta','sasaran','tujuan',
        'nominal_biaya','matauang_id','permasalahan','upaya_pemecahan','penutup','lampiran',
    ];
}
