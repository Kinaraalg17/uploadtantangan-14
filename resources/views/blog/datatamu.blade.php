<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tamu</title>
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
	<h2>Data Tamu</h2>
	<small class="text-muted">Hotel Inpedia Indonesia</small>
	<br>
	<br>
	<div class="row mt-2 mb-1">
		<div class="col-3">
			<form action="/datatamu/cari" method="GET">
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
		<a class="w3-button w3-black w3-round-xlarge" href="/datatamu/tambah">tambah</a>    
	</div>
	<br>
	<br>
	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	 		<th>ID</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>JENIS KELAMIN</th>
			<th>NO TELP </th>
			<th>ALAMAT </th>
            <th>WARGA NEGARA</th>
			<th>function</th>
    </tr>
    </thead>
    <tbody>
	@foreach($tamu as $p)
		<tr>
			<td>{{ $p->ID_TAMU }}</td>
			<td>{{ $p->NAMA_TAMU }}</td>
			<td>{{ $p->TANGGAL_LAHIR }}</td>
			@if($p->JENIS_KELAMIN_TAMU == 1)
				<td>Laki-Laki</td>
			@else
				<td>Perempuan</td>
			@endif
			<td>{{ $p->NO_TLP_TAMU }}</td>
      		<td>{{ $p->ALAMAT_TAMU }}</td>
      		<td>{{ $p->KEWARGANEGARAAN }}</td>
			<td>
				<a href="/datatamu/edittamu/{{ $p->ID_TAMU }}">Edit</a>
				<a href="/datatamu/hapus/{{ $p->ID_TAMU }}">Hapus</a>
		</tr>
	@endforeach
    </tbody>
  	</table>
	<div class="row align-items-start">
    	<div class="col text-left">
			Page {{ $tamu ->currentPage() }}
    	</div>
    	<div class="col text-center">
			Jumlah Data : {{ $tamu->total() }} <br>
			{{ $tamu->links() }}
			<br>
			<div class="row mt-2"> 
				<div class="col text-center">
					<small class="text-muted">@Copyright Hotel Inpedia Indonesia</small>
				</div>
			</div>
    	</div>
    	<div class="col text-right">
			Data Per Page : {{ $tamu->perPage() }}			
    	</div>	
	</div>
</div>
</body>
</html>