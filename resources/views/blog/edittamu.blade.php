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
	<title>Edit Tamu</title>
</head>
<body>
<div class="container">
  <h2>Edit Data Admin</h2>
  <small class="text-muted">Hotel Inpedia Indonesia</small>
  <br>
  <br>

	@foreach($tamu as $p)
	<form action="/datatamu/update" method="post">
		{{ csrf_field() }}
		<div class="form-row">
			<div class="form-group">
				<input type="hidden" name="ID" value="{{ $p->ID_TAMU }}">
			</div>
			<div class="form-group col-md-4">
        		NAMA<input type="text" class="form-control" name="NAMA" value="{{ $p->NAMA_TAMU }}">
      		</div>
  	  		<div class="form-group col-md-4">
        		TANGGAL LAHIR<input type="date" class="form-control" name="TANGGAL" value="{{ $p->TANGGAL_LAHIR }}">
      		</div>
	    	<div class="form-group col-md-4">
        		JENIS KELAMIN  *1=L *0=P <input type="text" class="form-control" name="JENISKELAMIN" value="{{ $p->JENIS_KELAMIN_TAMU }}">
      		</div>
  	  		<div class="form-group col-md-4">
        		NO TELP<input type="text" class="form-control" name="TELP" value="{{ $p->NO_TLP_TAMU }}">
      		</div>
  	  		<div class="form-group col-md-4">
        		ALAMAT<input type="text" class="form-control" name="ALAMAT" value="{{ $p->ALAMAT_TAMU }}">
      		</div>
  	  		<div class="form-group col-md-4">
        		KEWARGANEGARAAN<input type="text" class="form-control" name="KEWARGANEGARAAN" value="{{ $p-> KEWARGANEGARAAN }}">
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
		<a class="w3-button w3-blue w3-round-xlarge" href="/datatamu">kembali</a>    
	</div>
		
</body>
</html>
