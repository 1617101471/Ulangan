<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $table='mata_pelajaran';

    protected $fillable=['nama_mapel','kkm'];

    public function siswa() {
		return $this->belongsToMany('App\siswa', 'mapel_siswa', 'id_mapel', 'id_siswa');
	}
}
