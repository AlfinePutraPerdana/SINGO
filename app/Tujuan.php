<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'instansi_id','created_at','updated_at',
    ];
}
