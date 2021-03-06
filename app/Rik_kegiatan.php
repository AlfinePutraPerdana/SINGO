<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rik_kegiatan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_program','name','detail_kegiatan',
        'penerima_manfaat','indikator_outcome','lokasi','tahun_awal','tahun_akhir',
        'mitra_kemendagri','mitra_lapangan','nominal_lokal','nominal_asing','mata_uang','mitra_kerja','sumber_dana','status','created_at','updated_at',
    ];

}
