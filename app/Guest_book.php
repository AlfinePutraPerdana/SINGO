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
        'id_tenaga', 'tujuan_id','kegiatan_id','tgl_awal','tgl_akhir','jadwal','created_at','updated_at',
    ];
}