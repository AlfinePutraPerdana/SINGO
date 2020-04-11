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
        'nama', 'negara','kota','alamat','id_kategori','parent_id','no_regis_izin',
        'created_at','updated_at',
    ];

    public function mitra_lokal(){
        return $this->hasOne('App\Mitra_lokal');
    }

    public function master_tenaga_asing(){
        return $this->hasMany('App\Master_tenaga_asing');
    }

    public function history_ta(){
        return $this->hasMany('App\History_ta');
    }

    public function user() {
        return $this->hasOne('App\User','id_instansi');
    }


}
