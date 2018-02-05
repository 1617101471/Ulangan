<?php

use Illuminate\Database\Seeder;
use App\siswa;
use App\wali;
use App\guru;
use App\mata_pelajaran;
use App\kelas;
class seederrelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('siswa')->delete();
		DB::table('wali')->delete();
		DB::table('guru')->delete();
		DB::table('mata_pelajaran')->delete();
		DB::table('mapel_siswa')->delete();
		DB::table('kelas')->delete();

		$guru = guru::create(array(
			'nama' => 'Kang Candra',
			'nik' => '12345',
			'alamat'=>'sayati',
			'mata_pelajaran'=>'RPL'
		));

		$this->command->info('Data guru telah diisi!');

		$kelas = kelas::create(array(
			'nama_kelas' => 'XI RPL 1'
		));
		$novay = siswa::create(array(
			'nama' => 'Alif Firmansyah',
			'nis'  => '1015015072',
			'id_guru' => $guru->id,
			'id_kelas' => $kelas->id
		));

		$dije = siswa::create(array(
			'nama' => 'Rizky Nur Fadhilah',
			'nis'  => '1015015088',
			'id_guru' => $guru->id,
			'id_kelas' => $kelas->id
		));

		$ayu = siswa::create(array(
			'nama' => 'Rizky Bagus',
			'nis'  => '1015015078',
			'id_guru' => $guru->id,
			'id_kelas' => $kelas->id
		));

		# Informasi ketika siswa telah diisi.
		$this->command->info('siswa telah diisi!');

		wali::create(array(
			'nama'  => 'aryo S',
			'alamat'=>'Cangkuang',
			'id_siswa' => $novay->id
		));
		wali::create(array(
			'nama'  => 'Tangkurak',
			'alamat'=>'Ciodeng',
			'id_siswa' => $dije->id
		));
		wali::create(array(
			'nama'  => 'Mario Gomez',
			'alamat'=>'Cigondewah',
			'id_siswa' => $ayu->id
		));

		# Informasi ketika semua wali telah diisi.
		$this->command->info('Data siswa dan wali telah diisi!');

		$RPL = mata_pelajaran::create(array('nama_mapel' => 'RPL','kkm' => '81'));
		$TKJ = mata_pelajaran::create(array('nama_mapel' => 'TKJ','kkm' => '88'));

		# Hubungkan Mahasiswa dengan Hobinya masing-masing
		$novay->mata_pelajaran()->attach($RPL->id);
		$novay->mata_pelajaran()->attach($TKJ->id);
		$dije->mata_pelajaran()->attach($RPL->id);
		$ayu->mata_pelajaran()->attach($TKJ->id);

		# Tampilkan pesan ini bila berhasil diisi
		$this->command->info('siswa beserta mata_pelajaran telah diisi!');

    }
}
