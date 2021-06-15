<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_uang extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'instansi_id','created_at','updated_at',
    ];

    public function rkt(){
        return $this->belongsTo('App\Rkt','mata_uang_id');
    }
}
