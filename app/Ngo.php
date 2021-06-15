<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_instansi','no_telp','fax','email','website','bidang_kerja',
        'mulai_beroperasi','tgl_ttd_msp','lokasi_kerja_sama','country_director','created_at','updated_at',
    ];
}
