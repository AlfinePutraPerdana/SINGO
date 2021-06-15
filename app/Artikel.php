<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'artikel','foto','video','status_verif','kategori','created_at','updated_at',
    ];
}
