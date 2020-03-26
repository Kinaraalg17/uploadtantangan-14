<!DOCTYPE html>
<html lang="en">
<head>
  <title>data detail reservasi</title>
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
  <h2>data detail reservasi</h2>
	<br>
	<br>
  <table class="table">
    <thead class="thead-dark">
	<tr>
	 		 <th>ID RESERVASI</th>
			<th>ID KAMAR </th>
      <th>function </th>
      </tr>
    </thead>
    <tbody>
	@foreach($detail_reservasi as $p)
		<tr>
			<td>{{ $p->ID_RESERVASI }}</td>
			<td>{{ $p->ID_KAMAR }}</td>
			<td>
			<a href="/detailreservasi/hapus/{{ $p->ID_RESERVASI }}">Hapus</a>
      </td>
			
			
		</tr>
		@endforeach
    </tbody>
  </table>
  <table class="table">
    <thead class="thead-light">
     
    </tbody>
  </table>
</div>
<div class="w3-container w3-center">
<a class="w3-button w3-black w3-round-xlarge" href="reservasi/tambah">tambah</a>    
</div>
</body>
</html>