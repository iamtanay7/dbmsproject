<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	  <link rel="stylesheet" type="text/css" href="style.css">
 --> <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	
	<form action="/dbmsproject/handle.php" method="post">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-5">Delete Record</h1>
     <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
   </div>
</div>
<div class="container">
<div class="form-group">
<label for="year">SELECT YEAR:</label>
<select required name="year" class="form-control" id="year">
  <option value="">none selected</option>
  <option value="report18">2018</option>
  <option value="report17">2017</option>
  <option value="report16">2016</option>
  <option value="report15">2015</option>
</select>
</div>

<div class="form-group">
<label for="compname">ENTER NAME OF COMPANY TO DELETE RECORD:</label>
<input type="text" name="compname" required="" class="input-group" class="form-control" id="compname">
</div>

<input type="submit" name="dsub" value="Delete record" class="btn btn-primary"></button>
</div>
</form>
</body>
</html>

