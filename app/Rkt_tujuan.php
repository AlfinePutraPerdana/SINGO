<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rkt_tujuan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_rkt', 'id_tujuan','created_at','updated_at',
    ];
}
