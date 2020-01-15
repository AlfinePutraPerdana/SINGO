<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pendahuluan', 'capaian','peran_serta','sasaran','tujuan',
        'nominal_biaya','permasalahan','upaya_pemecahan','penutup','lampiran',
    ];
}