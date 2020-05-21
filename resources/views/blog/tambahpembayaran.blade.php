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
	<title>Payment</title>
</head>
<body>
 
    

	<br/>
	
	<div class="container">
  <h2>PAYMENT FORM</h2>
  <br>
  <form action="/pembayaran/store" method="post">
  <div class="form-group">
    <div class="form-group">
    ID RESERVASI<input type="hidden" class="form-control" name="ID_RESERVASI" value="{{$reservasi->ID_RESERVASI}}"><br>{{$reservasi->ID_RESERVASI}}
    {{ csrf_field() }}
    <div class="form-group">
    TANGGAL PEMBAYARAN<input type="date" class="form-control" name="TANGGAL">
    </div>
    <div class="form-group col-md-6">
    <label>PILIHAN PEMBAYARAN</label>
    <br>
    <select name="STATUS">
    <option>--- Choose room From Here ---</option>
    <option>Lunas</option>
    <option>Cicil</option>    
    </select>
    </div>
    <div class="form-group">
    TOTAL PEMBAYARAN<input type="text" class="form-control" name="TOTAL">
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