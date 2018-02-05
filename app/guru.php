<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='guru';

    protected $fillable=['nama','nik','alamat','mata_pelajaran'];

    public function siswa() {
		return $this->hasMany('App\siswa', 'id_guru');
	}
}
