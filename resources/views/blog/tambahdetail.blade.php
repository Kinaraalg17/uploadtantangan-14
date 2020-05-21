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
	<title>Document</title>
</head>
<body>
 
    

	<br/>
	
	<div class="container">
  <h2>One Step To Finish</h2>
  <h2>Reservation Detail</h2>
  <br>
  <form action="/detailreservasi/store" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    <div class="form-group">
    ID TAMU :<input type="hidden" class="form-control" name="ID_TAMU" value="{{$tamu->ID_TAMU}}"><br>{{$tamu->ID_TAMU}}
    </div>
    <div class="form-group">
    NAMA TAMU :<input type="hidden" class="form-control" name="NAMA_TAMU" value="{{$tamu->NAMA_TAMU}}"><br>{{$tamu->NAMA_TAMU}}
    </div>
    <div class="form-group">
    TANGGAL LAHIR :<input type="hidden" class="form-control" name="TANGGAL_LAHIR" value="{{$tamu->TANGGAL_LAHIR}}"><br>{{$tamu->TANGGAL_LAHIR}}
    </div>
    <div class="form-group">
    ALAMAT TAMU :<input type="hidden" class="form-control" name="ALAMAT_TAMU" value="{{$tamu->ALAMAT_TAMU}}"><br>{{$tamu->ALAMAT_TAMU}}
    </div>
    <div class="form-group">
    KEWARGANEGARAAN :<input type="hidden" class="form-control" name="KEWARGANEGARAAN" value="{{$tamu->KEWARGANEGARAAN}}"><br>{{$tamu->KEWARGANEGARAAN}}
    </div>
<div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/detailreservasi/edittamu/{{ $tamu->ID_TAMU }}">Edit data tamu</a>    
	</div>
    <br>
    <br>
    <p> *DATA RESERVASI </p>
    <div class="form-group">
    ID RESERVASI :<input type="hidden" class="form-control" name="ID" value="{{$reservasi->ID_RESERVASI}}"><br>{{$reservasi->ID_RESERVASI}}
    </div>
    <div class="form-group">
    TANGGAL RESERVASI :<input type="hidden" class="form-control" name="TANGGAL_RESERVASI" value="{{$reservasi->TANGGAL_RESERVASI}}"><br>{{$reservasi->TANGGAL_RESERVASI}}
    </div>
    <div class="form-group">
    TANGGAL CHECK IN :<input type="hidden" class="form-control" name="TANGGAL_CHECKIN" value="{{$reservasi->TANGGAL_CHECKIN}}"><br>{{$reservasi->TANGGAL_CHECKIN}}
    </div>
    <div class="form-group">
    TANGGAL CHECK OUT :<input type="hidden" class="form-control" name="TANGGAL_CHECKOUT" value="{{$reservasi->TANGGAL_CHECKOUT}}"><br>{{$reservasi->TANGGAL_CHECKOUT}}
    </div>
    <div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/detailreservasi/editreservasi/{{ $reservasi->ID_RESERVASI }}">Edit data reservasi</a>    
	</div>
    <br>
    <br>
    <p> *DATA KAMAR </p>
    <div class="form-group">
    ID KAMAR    : <input type="hidden" class="form-control" name="ID_KAMAR" value="{{$kamar->ID_KAMAR}}"> <br> {{$kamar->ID_KAMAR}}
    </div>
    <div class="form-group">
    JENIS KAMAR : <input type="hidden" class="form-control" name="JENIS_KAMAR" value="{{$kamar->JENIS_KAMAR}}"> <br> {{$kamar->JENIS_KAMAR}}
    </div>
    <div class="form-group">
    STATUS KAMAR : <input type="hidden" class="form-control" name="STATUS_KAMAR" value="{{$kamar->STATUS_KAMAR}}"> <br> {{$kamar->STATUS_KAMAR}}
    </div>
    <div class="form-group">
    HARGA KAMAR : <input type="hidden" class="form-control" name="HARGA_KAMAR" value="{{$kamar->HARGA_KAMAR}}"><br> {{$kamar->HARGA_KAMAR}}
    </div>
    <div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/detailreservasi/editkamar/{{ $kamar->ID_KAMAR }}">Edit data kamar</a>    
	</div>
    <br>
    <br>
    <p> *DATA PEMBAYARAN </p> 
    <div class="form-group">
    ID PEMBAYARAN : <input type="hidden" class="form-control" name="ID_PEMBAYARAN" value="{{$pembayaran->ID_PEMBAYARAN}}"><br>{{$pembayaran->ID_PEMBAYARAN}}
    </div>
    <div class="form-group">
    TANGGAL PEMBAYARAN : <input type="hidden" class="form-control" name="TANGGAL_PEMBAYARAN" value="{{$pembayaran->TANGGAL_PEMBAYARAN}}"><br>{{$pembayaran->TANGGAL_PEMBAYARAN}}
    </div>
    <div class="form-group">
    PILIHAN PEMBAYARAN : <input type="hidden" class="form-control" name="STATUS_PEMBAYARAN" value="{{$pembayaran->STATUS_PEMBAYARAN}}"><br>{{$pembayaran->STATUS_PEMBAYARAN}}
    </div>
    <div class="form-group">
    TOTAL PEMBAYARAN : <input type="hidden" class="form-control" name="TOTAL_PEMBAYARAN" value="{{$pembayaran->TOTAL_PEMBAYARAN}}"><br>{{$pembayaran->TOTAL_PEMBAYARAN}}
    </div>
    <div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/detailreservasi/editpembayaran/{{ $pembayaran->ID_PEMBAYARAN }}">Edit data pembayaran</a>    
	</div>
  <br>
  <br>
  <br>
  <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="w3-container w3-right">
		<a class="w3-button w3-black w3-round-xlarge" href="/detailreservasi/cetak_pdf">print as pdf</a>    
	</div>
  </form>
  <p>*if you submit, it means that your reservation is already finished </p>
  <p>You can't change your reservation data again</p>
  <p>thanks for your reservation hope you can feel the pleasure experience with us<p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-container w3-center">
<a class="w3-button w3-blue w3-round-xlarge" href="/blog">kembali</a>    
</div>

 
	
</body>
</html>