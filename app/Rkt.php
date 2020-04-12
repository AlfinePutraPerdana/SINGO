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
        'judul','pendahuluan', 'hasil_yang_diharapkan', 'peran_ketiga', 'kelompok_sasaran','tujuan',
        'tenaga_lokal','tenaga_asing','jumlah_ta','nominal_biaya', 'mata_uang_id','lokasi', 'jadwal_awal', 'jadwal_akhir', 'penutup', 'lampiran','filename_lampiran', 'bap', 'filename_bap' ,'id_program','status','catatan','created_at','updated_at',
    ];

    public function mata_uang()
    {
        return $this->hasOne('App/Mata_uang');
    }


    public function master_program()
    {
        return $this->hasOne('App/Master_program');
    }
    
}
