<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monev extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'city_id','jadwal','tanggapan','tgl_mulai','tgl_selesai','created_at','updated_at',
    ];
}
