<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Data Tamu</title>
  <style>
body {
  background-image: ("background.jpg");
}
</style>
</head>

</style>
<body>
	<br/>
	
	<div class="container">
  <h2>Tambah Data Tamu</h2>
  <small class="text-muted">Hotel Inpedia Indonesia</small>
  <br>
  <br>
  <form action="/datatamu/store" method="post">
  {{ csrf_field() }}
    <div class="form-group">
      <div class="form-group">
        NAMA<input type="text" class="form-control" name="NAMA">
      </div>
  	  <div class="form-group">
        TANGGAL LAHIR<input type="date" class="form-control" name="TANGGAL">
      </div>
	    	<div class="form-group">
    <label>JENIS KELAMIN</label>
    <br>
    <select name="JENISKELAMIN">
    <option>--- pilih jenis kelamin ---</option>
    <option>Laki-Laki</option>
    <option>Perempuan</option>    
    </select>
    </div>
  	<div class="form-group">
  	  <div class="form-group">
        NO TELP<input type="text" class="form-control" name="TELP">
      </div>
  	  <div class="form-group">
        ALAMAT<input type="text" class="form-control" name="ALAMAT">
      </div>
  	  <div class="form-group">
        KEWARGANEGARAAN<input type="text" class="form-control" name="KEWARGANEGARAAN">
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
<a class="w3-button w3-blue w3-round-xlarge" href="/datatamu">kembali</a>    
</div>

 
	
</body>
</html>