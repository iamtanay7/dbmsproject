<!DOCTYPE html>
<html>
<head>
	<title>INSERT RECORD</title>
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
    <h1 class="display-5">Insert Record</h1>
     <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
   </div>
</div>
<div class="container">
	<div class="form-group">
	<label>  SELECT YEAR:</label>
<select required name="year" class="form-control">
  <option value="">none selected</option>
  <option value="report18">2018</option>
  <option value="report17">2017</option>
  <option value="report16">2016</option>
  <option value="report15">2015</option>
</select>
</div>
<div class="form-group">
<label>Enter name of Company:</label>
<input type="text" name="company" required="" class="form-control">
<br/>
<label>Enter CGPA Criteria:</label>
<input type="text" name="cgpa" required="" class="form-control">
<br>
<label>Enter branch criteria:</label>
<input type="text" name="branchc" required="" class="form-control">
<br>
</div>
<label class="for">UG students<br>
Enter number of placed students from CE 1st shift, CE 2nd shift,
IT, ENTC 1st shift and ENTC 2nd shift respectively: </label> <br>
<div class="form-check form-check-inline">



<input type="number" name="ugce1" required="" size="4"  style="width:50px;"class="form-check-input" >
<input type="number" name="ugce2" required="" style="width:50px;" class="form-check-input">
<input type="number" name="ugit" required="" style="width:50px;" class="form-check-input">
<input type="number" name="ugentc1" required="" style="width:50px;" class="form-check-input">
<input type="number" name="ugentc2" required="" style="width:50px;" class="form-check-input">
</div>
<br>
<br>
<label>PG students<br>
Enter no. of placed students from CE, IT and ENTC respectively:</label>  <br>
<div class="form-check form-check-inline">

<input type="number" name="pgce" required="" style="width:50px;" class="form-check-input">
<input type="number" name="pgit" required="" style="width:50px;" class="form-check-input">
<input type="number" name="pgentc" required="" style="width:50px;" class="form-check-input">
<br>
</div>
<br>
<div class="form-group">
<label>Enter total no. of males:  
</label>
<input type="number" name="males" required="" style="width:50px;" class="form-control"><br>
<label>Enter total no. of females: </label>
<input type="number" name="females" required="" style="width:50px;" class="form-control"><br>
</div>
<div class="form-group">
<label>Enter Salary (lpa):
</label>
<input type="text" name="salary" required="" class="form-control"><br>
<label>Enter Visit date:</label>
<input type="date" name="date1" required="" class="form-control"><br>
<input type="submit" name="isub" value="Submit" class="btn btn-primary">
</div>
</div>
</form>
</body>
</html>