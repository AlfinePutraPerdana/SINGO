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
        'instansi_id','pembiayaan','durasi_awal','durasi_akhir','created_at','updated_at',
    ];
}