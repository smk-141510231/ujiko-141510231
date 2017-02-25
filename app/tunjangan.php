<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjangan extends Model
{
	 protected $table = 'tunjangans';
    protected $fillable = array('kode_tunjangan','jabatan_id','golongan_id','status','jumlah_anak','besaran_uang','created_at','updated_at');
    protected $visible = array('kode_tunjangan','jabatan_id','golongan_id','status','jumlah_anak','besaran_uang','created_at','updated_at');

    public function golongan()
    {
    	return $this->belongsTo('App\Golongan','golongan_id');
    }
    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan','jabatan_id');
    }
    //
}
