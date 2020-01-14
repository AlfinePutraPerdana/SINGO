<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rkt extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pendahuluan', 'hasil_yang_diharapkan', 'peran_ketiga', 'kelompok_sasaran',
        'nominal_biaya', 'mata_uang_id', 'jadwal_awal', 'jadwal_akhir', 'penutup', 'lampiran', 'bap', 'id_program','created_at','updated_at',
    ];
}
