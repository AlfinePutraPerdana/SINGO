<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_tenaga_asing extends Model
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
'cv_resume','filename_cv','jenis_kelamin','tempat_lahir','tanggal_lahir',
'kategori','tujuan','kegiatan','tgl_awal','tgl_akhir','foto','filename_foto',
'upload_passport','filename_passport','jobdesc','filename_jobdesc','dokumen_pendukung','filename_dokumen','status','status_keaktifan','file_perpanjangan','filename_perpanjangan','catatan','created_at','updated_at'
    ];

    public function instansi(){
        return $this->belongsTo('App\Instansi','id_instansi');
    }
}
