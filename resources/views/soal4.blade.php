<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Soal4</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<center>Soal 4 Bonus(Tampilkan semua)</center>
			@foreach ($siswa as $a)
				<hr>
				<h3>Nama siswa : {{ $a->nama }}</h3>
				<h3>Nama Wali : {{$a->wali->nama}}</h3>
				<h3>Nama Guru : {{$a->guru->nama}}</h3>
				<h3>Nama kelas  : {{$a->kelas->nama_kelas}}</h3>
				<h4>Mata Pelajaran : 
					@foreach($a->mata_pelajaran as $b)
					<li><small>{{$b->nama_mapel}}</small></li>
					@endforeach
				</h4>
			</hr>
			@endforeach
		</div>
	</body>
</html>