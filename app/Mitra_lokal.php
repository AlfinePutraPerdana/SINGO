<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Mitra_lokal extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id','pembiayaan','durasi_awal','durasi_akhir','created_at','updated_at',
    ];
    
    public function instansi()
    {
       return $this->belongsTo('App\Instansi');
    }
}
