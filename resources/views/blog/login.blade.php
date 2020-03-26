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
<br>
<br>
<br>
<br>
<nr>
<br>
<body>
<div class="container">
<form action="/admin2" method="post">
<div class="form-group">
{{ csrf_field() }}
    LOGIN <br> <input type="text" class="form-control" name="ID_ADMIN" ><br>
    <p>use your ID to Login</p>
</div>
<button type="submit" class="btn btn-primary">login</button>
  </form>
</div>

