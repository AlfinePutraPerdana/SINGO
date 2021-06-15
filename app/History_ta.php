<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History_ta extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
'kewarganegaraan','no_passport',
'tgl_berlaku_awal','tgl_berlaku_akhir',
'id_instansi','jabatan','foto','upload_passpor',
'cv_resume','jenis_kelamin','tempat_lahir','tanggal_lahir',
'kategori','tujuan','kegiatan','tgl_awal','tgl_akhir','foto',
'upload_passport','jobdesc','dokumen_pendukung','status','status_keaktifan','file_perpanjangan','catatan','created_at','updated_at'
    ];

    public function instansi(){
        return $this->belongsTo('App\Instansi','id_instansi');
    }
}
