<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Malas Ngoding</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">

				<center>
					<h2>Tutorial Laravel #33 : Notifikasi Dengan Session Laravel</h2>
					<h4><a href="https://www.malasngoding.com/notifikasi-dengan-session-laravel/">WWW.MALASNGODING.COM</a></h4>
				</center>

				@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif

				@if ($message = Session::get('gagal'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif

				@if ($message = Session::get('peringatan'))
				<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif


				<center>
                                <a href="/pesan/sukses" class="btn btn-success">NOTIFIKASI SUKSES</a>
				<a href="/pesan/gagal" class="btn btn-danger">NOTIFIKASI GAGAL</a>
				<a href="/pesan/peringatan" class="btn btn-warning">NOTIFIKASI PERINGATAN</a>
				</center>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>