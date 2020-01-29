<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembebasan_pajak extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'id_instansi','created_at','updated_at',
    ];
}
