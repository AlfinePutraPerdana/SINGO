<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan_keuangan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'id_instansi','id_rik','id_rkt','nominal_lokal','nominal_asing','mata_uang','rincian','created_at','updated_at',
    ];
}
