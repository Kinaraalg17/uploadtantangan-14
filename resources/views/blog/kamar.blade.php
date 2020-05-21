<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kamar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  	<h2>Data Kamar</h2>
  	<small class="text-muted">Hotel Inpedia Indonesia</small>
	<br>
	<br>
	<div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="kamar/tambah">tambah</a>    
	</div>
	<br>
	<br>
	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	 		<th>ID</th>
			<th>STATUS KAMAR</th>
			<th>KAPASITAS KAMAR</th>
			<th>JENIS KAMAR</th>
			<th>HARGA KAMAR</th>
			<th>function</th>
    </tr>
    </thead>
    <tbody>
	@foreach($kamar as $p)
		<tr>
			<td>{{ $p->ID_KAMAR }}</td>
			<td>{{ $p->STATUS_KAMAR }}</td>
			<td>{{ $p->KAPASITAS_KAMAR }}</td>
			<td>{{ $p->JENIS_KAMAR }}</td>
			<td>{{ $p->HARGA_KAMAR }}</td>
			<td>
			<a href="/kamar/editkamar/{{ $p->ID_KAMAR }}">Edit</a>
			<a href="/kamar/hapus/{{ $p->ID_KAMAR }}">Hapus</a>
			
			
		</tr>
		@endforeach
    </tbody>
	</table>
	<div class="row align-items-start">
    	<div class="col text-left">
			Page {{ $kamar->currentPage() }}
    	</div>
    	<div class="col text-center">
			Jumlah Data : {{ $kamar->total() }} <br>
			{{ $kamar ->links() }}
			<br>
			<div class="row mt-2"> 
				<div class="col text-center">
					<small class="text-muted">@Copyright Hotel Inpedia Indonesia</small>
				</div>
			</div>
    	</div>
    	<div class="col text-right">
			Data Per Page : {{ $kamar->perPage() }}			
    	</div>
		
  	</div>	
</div>
</div>
</body>
</html>


