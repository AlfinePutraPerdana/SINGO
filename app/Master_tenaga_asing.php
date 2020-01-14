<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','kewarganegaraan', 'no_passport','tgl_berlaku_awal', 'tgl_berlaku_akhir',
        'id_instansi', 'jabatan','foto', 'upload_passpor','cv_resume', 'jenis_kelamin',
        'tempat_lahir', 'tanggal_lahir','created_at','updated_at',
    ];
}