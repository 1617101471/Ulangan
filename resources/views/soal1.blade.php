<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Soal1</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($guru as $temp)
				<h3>Nama Guru : 
					{{ $temp -> nama }} <small>[{{ $temp -> nik }}]</small>
				</h3>
				<h5>Nama siswa : 
					@foreach($temp -> siswa as $tampung) 
						<li><small>{{ $tampung -> nama}} </small></li> 
					@endforeach
				</h5>
			@endforeach
		</div>
	</body>
</html>