<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_program extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_instansi','nama','status', 'created_at','updated_at'
    ];

}

