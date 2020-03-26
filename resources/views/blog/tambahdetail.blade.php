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
  <h2>BOOKING SUCCESS</h2>
  <h2>SO THIS IS YOUR RESERVATION DETAIL</h2>
  <br>
  <form action="/detailreservasi/store" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    <div class="form-group">
    ID RESERVASI<input type="hidden" class="form-control" name="ID" value="{{$reservasi->ID_RESERVASI}}"><br>{{$reservasi->ID_RESERVASI}}
    </div>
    <div class="form-group">
    ID KAMAR<input type="hidden" class="form-control" name="ID_KAMAR" value="{{$kamar->ID_KAMAR}}"><br>{{$kamar->ID_KAMAR}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <p>please screenshot or print this page</p>
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