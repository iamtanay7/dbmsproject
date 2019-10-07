<!DOCTYPE html>
<html lang="en">
<head>
<!--  <link rel="stylesheet" type="text/css" href="style.css">
 --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>ADMIN</title>
</head>
<body>
<ul class="nav nav-pills nav-fill" >
  <li class="nav-item">
    <a class="nav-link" href="untitled.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="registration/index.php">LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dbmsproject/about.html">ABOUT US</a>
  </li>
 
</ul>


<form action = "/dbmsproject/admincheck.php" method="post">
<div class="container">
<div class="form-check">
  
  <hr>
	<input class="form-check-input" type="radio" name="some" value="update" required="" id="defaultCheck1"> 
	 <label class="form-check-label" for="defaultCheck1">
	 	Modify existing record
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="some" value="delete" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Delete a record
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="some" value="insert" id="defaultCheck3">
  <label class="form-check-label" for="defaultCheck2">
    Insert a record
  </label>
</div>
<br>

<input type="submit" name="submit" class="btn btn-primary" width="100%">
</div>
</form>
</div>
</body>
</html>