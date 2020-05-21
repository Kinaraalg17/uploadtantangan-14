<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
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
	<h2>Data Admin</h2>
	<small class="text-muted">Hotel Inpedia Indonesia</small>
	<div class="row mt-2 mb-1">
		<div class="col-3">
			<form action="/admin1/cari" method="GET">
				<div class="input-group">
					<input class="form-control" name="cari" type="text" placeholder="Masukkan Kata Kunci..." value="{{ old('cari') }}">
					<div class="input-group-append">
						<input class="btn btn-info" type="submit" value="Cari">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="admin1/tambah">tambah</a>    
	</div>
	<br>
	<br>
  	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
		<tr>
	 		<th>ID</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO TELP</th>
			<th>PASSWORD</th>

			<th>function</th>
      	</tr>
    </thead>
    <tbody>
	@foreach($admin as $p)
		<tr>
			<td>{{ $p->ID_ADMIN }}</td>
			<td>{{ $p->NAMA_ADMIN }}</td>
			<td>{{ $p->ALAMAT_ADMIN }}</td>
			<td>{{ $p->NO_TELP_ADMIN }}</td>
			<td>{{ $p->PASSWORD }}</td>

			
			<td>
			<a href="/admin1/edit/{{ $p->ID_ADMIN }}">Edit</a>
			<a href="/admin1/hapus/{{ $p->ID_ADMIN }}">Hapus</a>
			</td>
		</tr>
		@endforeach
    </tbody>
  	</table>
	<div class="row align-items-start">
    	<div class="col text-left">
			Page {{ $admin ->currentPage() }}
    	</div>
    	<div class="col text-center">
			Jumlah Data : {{ $admin ->total() }} <br>
			{{ $admin ->links() }}
			<br>
			<div class="row mt-2"> 
				<div class="col text-center">
					<small class="text-muted">@Copyright Hotel Inpedia Indonesia</small>
				</div>
			</div>
    	</div>
    	<div class="col text-right">
			Data Per Page : {{ $admin ->perPage() }}			
    	</div>
		
  	</div>	
</div>

</body>
</html>

