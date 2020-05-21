<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservasi</title>
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
  <h2>Data Reservasi</h2>
	<small class="text-muted">Hotel Inpedia Indonesia</small>
  <br>
  <br>
  <div class="row mt-2 mb-1">
		<div class="col-3">
			<form action="/reservasi/cari" method="GET">
				<div class="input-group">
					<input class="form-control" name="cari" type="text" placeholder="Masukkan Tanggal Checkin" value="{{ old('cari') }}">
					<div class="input-group-append">
						<input class="btn btn-info" type="submit" value="Cari">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="reservasi/tambah">tambah</a>    
	</div>
	<br>
	<br>
  	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	 		<th>ID RESERVASI</th>
      <th>ID ADMIN</th>
      <th>ID TAMU</th>
      <th>TANGGAL RESERVASI</th>
			<th>JUMLAH RESERVASI</th>
			<th>CHECK IN</th>
			<th>CHECK OUT</th>
      <th>function</th>

      </tr>
    </thead>
    <tbody>
	@foreach($reservasi as $p)
		<tr>
            <td>{{ $p->ID_TAMU  }}</td>
			      <td>{{ $p->ID_RESERVASI  }}</td>
			      <td>{{ $p->ID_ADMIN  }}</td>
            <td>{{ $p->TANGGAL_RESERVASI  }}</td>
			      <td>{{ $p->JUMLAH_RESERVASI  }}</td>
            <td>{{ $p->TANGGAL_CHECKIN  }}</td>
            <td>{{ $p->TANGGAL_CHECKOUT  }}</td>
			<td>
			<a href="/reservasi/edit/{{ $p->ID_RESERVASI }}">Edit</a>
			<a href="/reservasi/hapus/{{ $p->ID_RESERVASI }}">Hapus</a>
			
			
		</tr>
		@endforeach
    </tbody>
  </table>
</div>
<p> TOTAL KAMAR : 50 Kamar </p>

</body>
</html>