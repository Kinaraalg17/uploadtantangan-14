<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
        
        </style>
        </head>
        
    <div class="topnav">
    <a href="pointofsales">Dashboard</a>
        <a href="roomlist">product</a>
        <a href="reservasi">sales</a>
        <a href="report">report</a>
        <a href="/datatamu/tambah">transaction</a>
        <a href="pointofsales">Back</a>


        
        
    </div>
<body>
<br>
<br>
<div class="container">
  <h2>PAYMENT REPORT</h2>
	<br>
	<br>
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
  <table class="table">
    <thead class="thead-light">
     
    </tbody>
  </table>
  <div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/report_pdf">print as pdf</a>    
	</div>

<br>
<br>
<br>
</div>
</body>
</html>