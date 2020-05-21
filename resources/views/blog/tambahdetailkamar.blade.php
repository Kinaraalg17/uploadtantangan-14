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
	<title>Edit kamar</title>
</head>
<body>
<div class="container">
  <h2>ROOM EDIT</h2>
  <br>
	@foreach($kamar as $p)
	<form action="/detailreservasi/updatekamar" method="post">
		{{ csrf_field() }}
		<div class="form-row">
		<div class="form-group">
		<input type="hidden" name="ID" value="{{ $p->ID_KAMAR }}"> <br/>
		</div>
        <div class="form-group col-md-6">
    <label>PILIHAN</label>
    <br>
    <select name="STATUS">
    <option>--- Choose room From Here ---</option>
    <option>Single Bed</option>
    <option>Double Bed</option>    
    </select>
    </div>
	<div class="form-group col-md-6">
        <div class="form-group col-md-6">
    <label>JENIS</label>
    <br>
    <select name="JENIS">
    <option>--- Choose room From Here ---</option>
    <option>VVIP</option>
    <option>VIP</option>    
    <option>SUITE</option>
    <option>RISE</option>
    </select>
    </div>
  	<div class="form-group col-md-6">
		<div class="form-group col-md-6">
        HARGA <input type="text" name="HARGA" class="form-control" value="{{ $p->HARGA_KAMAR }}"> <br/>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
	@endforeach
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="w3-container w3-center">
		<a class="w3-button w3-blue w3-round-xlarge" href="/admin1">kembali</a>    
	</div>
 
</body>
</html>