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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-5">Update Record</h1>
     <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
   </div>
</div>
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
			<input type="text" name="comp" class="form-control" id="compp" required="">
		</div>
<div class="form-group">
	<label for="options">Select criteria to modify</label>
	<select name="options" class="form-control" required="" id="options">
		<option value="" selected="">none selected</option>
		<option value="CRITERIA_CGPA" >CRITERIA_CGPA</option>
		<option value="CRITERIA_BRANCH">CRITERIA_BRANCH</option>
		<option value="BE_CE_1st_SHIFT">BE_CE_1st_SHIFT</option>
		<option value="BE_CE_2nd_SHIFT">BE_CE_2nd_SHIFT</option>
		<option value="BE_ENTC_1st_SHIFT">BE_ENTC_1st_SHIFT</option>
		<option value="BE_ENTC_2nd_SHIFT">BE_ENTC_2nd_SHIFT</option>
		<option value="BE_IT">BE_IT</option>
		<option value="ME_CE">ME_CE</option>
		<option value="ME_ENTC">ME_ENTC</option>
		<option value="ME_IT">ME_IT</option>
		<option value="MALES">MALES</option>
		<option value="FEMALES">FEMALES</option>
		<option value="SALARY">SALARY</option>
		

	</select>
</div>
<div class="form-group">
	<label for="newval">Enter new value</label>
	<input type="text" name="newval" class="form-control" id="newval">
</div>

		<input type="submit" name="updbtn" class="btn btn-primary">
		</div>
</form>
</body>
</html>

<?php
		
  ?>