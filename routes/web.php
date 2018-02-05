<?php
use App\siswa;
use App\wali;
use App\guru;
use App\kelas;
use App\mata_pelajaran;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('UH1', function() {

		# Temukan siswa dengan NIS 1015015072
		$siswa = siswa::where('nis', '=', '1015015072')->first();

		# Tampilkan nama wali siswa
		return $siswa->wali->nama;

	});

Route::get('UH2', function() {

		# Temukan mahasiswa dengan NIK 1234567890
		$siswa = siswa::where('nis', '=', '1015015072')->first();

		# Tampilkan nama guru pembimbing
		return $siswa->guru->nama;
	});

Route::get('UH3', function() {

		# Temukan dosen dengan yang bernama Yulianto
		$guru = guru::where('nama', '=', 'Kang Candra')->first();

		# Tampilkan seluruh data guru didikannya
		foreach ($guru->siswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nis . '</strong></li>';
	});

Route::get('UH4', function() {

		# Bila kita ingin melihat hobi saya
		$novay = siswa::where('nama', '=', 'Alif Firmansyah')->first();

		# Tampilkan seluruh hobi si novay
		foreach ($novay->mata_pelajaran as $temp) 
			echo '<li> Kelas : ' . $temp->nama_mapel . '<strong>' . $temp->kkm . '</strong></li>';
	});

Route::get('soal1', function() {

		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$guru = guru::with('siswa')->get();

		# Kirim variabel ke View
		return View::make('soal1', compact('guru'));
	});

Route::get('soal2', function() {

		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$siswa = siswa::where('nama', '=', 'Alif Firmansyah')->get();

		# Kirim variabel ke View
		return View::make('soal2', compact('siswa'));
	});

Route::get('soal3', function() {

		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$siswa = siswa::where('nama', '=', 'Alif Firmansyah')->get();

		# Kirim variabel ke View
		return View::make('soal3', compact('siswa'));
	});

Route::get('soal4', function() {

		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$siswa = siswa::with('wali','guru','kelas','mata_pelajaran')->get();

		# Kirim variabel ke View
		return View::make('soal4', compact('siswa'));
	});