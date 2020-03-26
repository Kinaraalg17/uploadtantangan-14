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
  <h2>PAYMENT FORM</h2>
  <br>
  <form action="/kredit/store" method="post">
  <div class="form-group">
    <div class="form-group">
    ID PEMBAYARAN<input type="hidden" class="form-control" name="ID" value="{{$pembayaran->ID_PEMBAYARAN}}"><br>{{$pembayaran->ID_PEMBAYARAN}}
    </div>
    {{ csrf_field() }}
    <div class="form-group">
    NO REKENING PEMBAYARAN<input type="text" class="form-control" name="REKENING">
    </div>
    <div class="form-group">
    ID RESERVASI<input type="hidden" class="form-control" name="ID_RESERVASI" value="{{$reservasi->ID_RESERVASI}}"><br>{{$reservasi->ID_RESERVASI}}
    </div>
    <div class="form-group">
    TANGGAL PEMBAYARAN<input type="hidden" class="form-control" name="TANGGAL" value="{{$pembayaran->TANGGAL_PEMBAYARAN}}"><br>{{$pembayaran->TANGGAL_PEMBAYARAN}}
    </div>
    <div class="form-group">
    TANGGAL PEMBAYARAN<input type="hidden" class="form-control" name="STATUS" value="{{$pembayaran->STATUS_PEMBAYARAN}}"><br>{{$pembayaran->STATUS_PEMBAYARAN}}
    </div>
    <div class="form-group">
    TOTAL PEMBAYARAN<input type="hidden" class="form-control" name="TOTAL" value="{{$pembayaran->TOTAL_PEMBAYARAN}}"><br>{{$pembayaran->TOTAL_PEMBAYARAN}}
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
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