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
  <h2>Payment update</h2>
  <br>
  @foreach($tunai as $p)
	<form action="/tunai/update" method="post">
    <div class="form-group">
		{{ csrf_field() }}
        <div class="form-group">
		<input type="hidden" name="ID" value="{{ $p->ID_PEMBAYARAN }}"> <br/>
        </div>
        <div class="form-group">
        NO KTP<input type="text" class="form-control" name="KTP" value="{{$p->NO_KTP}}">
        </div>
        <div class="form-group">
        ID RESERVASI<input type="text" class="form-control" name="ID_RESERVASI" value="{{$p->ID_RESERVASI}}">
        </div>
        <div class="form-group">
		 TANGGAL PEMBAYARAN <input type="text" required="required" name="TANGGAL" value="{{ $p->TANGGAL_PEMBAYARAN }}"> <br/>
        </div>
        <div class="form-group">
		STATUS PEMBAYARAN <input type="text" required="required" name="STATUS" value="{{ $p->STATUS_PEMBAYARAN }}"> <br/>
        </div>
        <div class="form-group">
		TOTAL PEMBAYARAN <input type="text" required="required" name="TOTAL" value="{{ $p->TOTAL_PEMBAYARAN }}"> <br/>
        </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	@endforeach
    </body>
</html>