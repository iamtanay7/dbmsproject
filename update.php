<?php
include 'establish.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE RECORD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<form action="#" method="post">
		<div class="container">
		<div class="form-group">
			<label for="foryear">Select Year</label>
			<select name="year" class="form-control" required="" id="foryear">
			  <option value="" >none selected</option>
			  <option value="report18">2018</option>
			  <option value="report17">2017</option>
			  <option value="report16">2016</option>
			  <option value="report15">2015</option>
			</select>
		</div>
		<div class="form-group">
			<label for="compp">Enter name of company</label>
			<input type="text" name="comp" class="form-control" id="compp">
		</div>
<div class="form-group">
	<select name="options" class="form-control" required="">
		<option value="CRITERIA_CGPA"></option>
		<option value="CRITERIA_BRANCH"></option>
		<option value="BE_CE_1st_SHIFT"></option>
		<option value="BE_CE_2nd_SHIFT"></option>
		<option value="BE_ENTC_1st_SHIFT"></option>
		<option value="BE_ENTC_2nd_SHIFT"></option>
		<option value="BE_IT"></option>
		<option value="ME_CE"></option>
		<option value="ME_ENTC"></option>
		<option value="ME_IT"></option>
		<option value="MALES"></option>
		<option value=""></option>
		<option value="SALARY"></option>
		

	</select>
</div>

		<input type="submit" name="updbtn" class="btn btn-primary">
		</div>
</form>

<script type="text/javascript">
	
</script>
</body>
</html>