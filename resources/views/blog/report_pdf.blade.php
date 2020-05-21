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
	 <p>Payment Report<p>
	</center>
	<table class="table">
    <thead class="thead-dark">
	<tr>
	 		 <th>ID PEMBAYARAN</th>
			<th>ID RESERVASI</th>
			<th>TANGGAL PEMBAYARAN</th>
			<th>STATUS PEMBAYARAN</th>
			<th>TOTAL PEMBAYARAN </th>
     </tr>
    </thead>
    <tbody>
	@foreach($pembayaran as $p)
		<tr>
			<td>{{ $p->ID_PEMBAYARAN }}</td>
			<td>{{ $p->ID_RESERVASI }}</td>
			<td>{{ $p->TANGGAL_PEMBAYARAN }}</td>
			<td>{{ $p->STATUS_PEMBAYARAN }}</td>
			<td>{{ $p->TOTAL_PEMBAYARAN }}</td>
			<td>
		</tr>
		@endforeach
    </tbody>
  </table>
</body>
</html>