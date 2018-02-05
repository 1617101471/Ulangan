<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table='siswa';

    protected $fillable=['nama','nis','id_guru','id_kelas'];

    public function wali() {
		return $this->hasOne('App\wali', 'id_siswa');
	}
	public function guru() {
		return $this->belongsTo('App\guru', 'id_guru');
	}
	public function kelas() {
		return $this->belongsTo('App\kelas', 'id_kelas');
	}
	public function mata_pelajaran() {
		return $this->belongsToMany('App\mata_pelajaran', 'mapel_siswa', 'id_siswa', 'id_mapel');
	}
}
