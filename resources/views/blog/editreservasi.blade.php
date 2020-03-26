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
<div class="container">
  <h2>SCHEDULE RESERVATION</h2>
  <br>
  @foreach($reservasi as $p)
	<form action="/reservasi/update" method="post">
    <div class="form-group">
		{{ csrf_field() }}
        <div class="form-group">
		<input type="hidden" name="ID" value="{{ $p->ID_RESERVASI }}"> <br/>
        </div>
        <div class="form-group">
        NAMA TAMU<input type="text" class="form-control" name="JENIS2" value="{{$p->ID_TAMU}}">
        </div>
        <div class="form-group">
        NAMA ADMIN<input type="text" class="form-control" name="JENIS" value="{{$p->ID_ADMIN}}">
    </div>
    <div class="form-group">
		 TANGGAL RESERVASI <input type="text" required="required" name="TANGGAL_RESERVASI" value="{{ $p->TANGGAL_RESERVASI }}"> <br/>
        </div>
        <div class="form-group">
		JUMLAH RESERVASI <input type="text" required="required" name="JUMLAH_RESERVASI" value="{{ $p->JUMLAH_RESERVASI }}"> <br/>
        </div>
        <div class="form-group">
		CHECK IN <input type="text" required="required" name="CHECKIN" value="{{ $p->TANGGAL_CHECKIN }}"> <br/>
        </div>
        <div class="form-group">
        CHECK OUT <input type="text" required="required" name="CHECKOUT" value="{{ $p->TANGGAL_CHECKOUT }}"> <br/>
        </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	@endforeach
    </body>
</html>