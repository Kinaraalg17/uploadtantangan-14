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
	<title>Reservasi</title>
</head>
<body>
 
    

	<br/>
	
	<div class="container">
  <h2>SCHEDULE RESERVATION</h2>
  <br>
  <form action="/reservasi/store" method="post">
  <div class="form-group">
    <div class="form-group">
    NAMA TAMU<input type="hidden" class="form-control" name="JENIS2" value="{{$tamu->ID_TAMU}}"><br>{{$tamu->NAMA_TAMU}}
  {{ csrf_field() }}
    <div class="form-group">
    <label>NAMA ADMIN</label>
    <br>
    <select name="JENIS">
    <option>--- Choose room From Here ---</option>
    @foreach($admin as $k)
  <option value="{{$k->ID_ADMIN}}">{{$k->NAMA_ADMIN}}</option>
  @endforeach
    </select>
    </div>
    <div class="form-group">
    TANGGAL RESERVASI<input type="date" class="form-control" name="TANGGAL_RESERVASI">
    </div>
    <div class="form-group">
    JUMLAH RESERVASI<input type="text" class="form-control" name="JUMLAH_RESERVASI">
    </div>
    <div class="form-group">
    CHECK IN<input type="date" class="form-control" name="CHECKIN">
    </div>
    <div class="form-group">
    CHECK OUT<input type="date" class="form-control" name="CHECKOUT">
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