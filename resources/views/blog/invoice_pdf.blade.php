<!DOCTYPE html>
<html>
<head>
	<title>INPEDIA HOTEL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
	 <img src="logo.png">
	</center>

	<p>ini adalah nota anda</p>

	<p>Biodata</p>
 <table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	 		<th>ID</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>ALAMAT </th>
			<th>KEWARGANEGARAAN </th>
    </tr>
    </thead>
    <tbody>
		<tr>
			<td>{{ $tamu->ID_TAMU }}</td>
			<td>{{ $tamu->NAMA_TAMU }}</td>
			<td>{{ $tamu->TANGGAL_LAHIR }}</td>
      		<td>{{ $tamu->ALAMAT_TAMU }}</td>
      		<td>{{ $tamu->KEWARGANEGARAAN }}</td>
	
			</tr>
			</tbody>
			</table>
	<br>
	<p>Kamar</p>
	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	 		<th>ID</th>
			<th>JENIS KAMAR</th>
			<th>STATUS KAMAR</th>
			<th>HARGA KAMAR</th>

    </tr>
    </thead>
    <tbody>
		<tr>
			<td>{{ $kamar->ID_KAMAR }}</td>
			<td>{{ $kamar->JENIS_KAMAR }}</td>
			<td>{{ $kamar->STATUS_KAMAR }}</td>
			<td>{{ $kamar->HARGA_KAMAR }}</td>
		

		</tr>
    </tbody>
	</table>
	<br>
	<p>Reservasi</p>
	<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark text-center">
	<tr>
	<th>ID RESERVASI</th>
      <th>TANGGAL RESERVASI</th>
	  	<th>CHECK IN</th>
		<th>CHECK OUT</th>


      </tr>
    </thead>
    <tbody>
		<tr>
			<td>{{ $reservasi->ID_RESERVASI  }}</td>
            <td>{{ $reservasi->TANGGAL_RESERVASI  }}</td>
            <td>{{ $reservasi->TANGGAL_CHECKIN  }}</td>
            <td>{{ $reservasi->TANGGAL_CHECKOUT  }}</td>
		
			</tr>
			</tbody>
			</table>
			<br>
			<p>Pembayaran</p>
			<table class="table table-hover mt-3 table-bordered">
    <thead class="thead-dark">
	<tr>
	 		 <th>ID PEMBAYARAN</th>
			<th>TANGGAL PEMBAYARAN</th>
			<th>STATUS PEMBAYARAN</th>
			<th>TOTAL PEMBAYARAN </th>
     </tr>
    </thead>
    <tbody>
		<tr>
			<td>{{ $pembayaran->ID_PEMBAYARAN }}</td>
			<td>{{ $pembayaran->TANGGAL_PEMBAYARAN }}</td>
			<td>{{ $pembayaran->STATUS_PEMBAYARAN }}</td>
			<td>{{ $pembayaran->TOTAL_PEMBAYARAN }}</td>
		
		</tr>
    </tbody>
  </table>
</body>
</html>