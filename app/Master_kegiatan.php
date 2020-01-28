<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_kegiatan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'instansi_id','created_at','updated_at',
    ];
}
