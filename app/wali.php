<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $table='wali';

    protected $fillable=['nama','alamat','id_siswa'];

    public function siswa() {
		return $this->belongsTo('App\siswa', 'id_siswa');
	}
}
