<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Soal3</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($siswa as $a)
				<h3>Nama siswa : 
					{{ $a->nama }}<small></small>
				</h3>
				<h4>Nama kelas  :
					 <strong>{{$a->kelas->nama_kelas}}</strong>
					 
				</h4>
			@endforeach
		</div>
	</body>
</html>