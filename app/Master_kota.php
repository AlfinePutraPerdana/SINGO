<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_kota extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','created_at','updated_at',
    ];
}
