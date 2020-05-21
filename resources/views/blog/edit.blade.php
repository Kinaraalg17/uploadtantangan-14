<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="noindex, nofollow" name="robots">
<link href="css/drop_down.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Edit Admin</title>
</head>
<body>
<div class="container">
  <h2>Edit Data Admin</h2>
  <small class="text-muted">Hotel Inpedia Indonesia</small>
  <br>
  <br>

	@foreach($admin as $p)
	<form action="/admin1/update" method="post">
		{{ csrf_field() }}
		<div class="form-row">
			<div class="form-group">
				<input type="hidden" name="ID" value="{{ $p->ID_ADMIN }}">
			</div>
			<div class="form-group col-md-4">
				NAMA <input class="form-control" type="text" name="NAMA" value="{{ $p->NAMA_ADMIN }}"> 
			</div>
			<div class="form-group col-md-4">
				NO TELP <input type="text" class="form-control" name="TELP" value="{{ $p->NO_TELP_ADMIN }}">
			</div>
			<div class="form-group col-md-6">
				PASSWORD <input type="text" class="form-control" name="PASSWORD" value="{{ $p->PASSWORD }}">
			</div>
			<div class="form-group col-md-6">
				ALAMAT <input type="text" name="ALAMAT" class="form-control" value="{{ $p->ALAMAT_ADMIN }}">
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
	@endforeach
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="w3-container w3-center">
		<a class="w3-button w3-blue w3-round-xlarge" href="/admin1">kembali</a>    
	</div>
		
</body>
</html>