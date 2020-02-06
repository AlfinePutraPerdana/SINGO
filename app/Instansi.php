<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class instansi extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'negara','kota','alamat','kategori','parent_id','no_regis_izin',
        'created_at','updated_at',
    ];

    public function mitra_lokal(){
        return $this->hasOne('App\Mitra_lokal');
    }
}
