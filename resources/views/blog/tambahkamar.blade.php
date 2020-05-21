<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="noindex, nofollow" name="robots">
<link href="css/drop_down.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Data Kamar</title>
</head>
<body>
 
    

	<br/>
	
	<div class="container">
  <h2>Tambah Data Kamar</h2>
  <br>
  <form action="/kamar/store" method="post">
  {{ csrf_field() }}
  <div class="form-row">
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
    KAPASITAS<input type="text" class="form-control" name="KAPASITAS">
    </div>
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
    HARGA<input type="text" class="form-control" name="HARGA">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
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