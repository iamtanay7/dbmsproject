<?php
include 'establish.php';
?>
<?php
session_start();

$sql1 = $_SESSION["sql1"];
$result = $conn->query($sql1);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<!--  <link rel="stylesheet" type="text/css" href="mystyle.css">
 -->  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
	table
	{
		border-collapse: collapse;
		width: 100%;
		color: DodgerBlue;
		font-family: monospace;
		font-family: "Blackadder ITC"
		font-size: 25px;
		text-align: left;

	}
	th{
background-color: DodgerBlue	;
  color: white;
  align-content: "center"

	}
	tr:nth-child(even){background-color: #f2f2f2;
</style>
<body>

	 <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="untitled.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="registration/index.php">LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dbmsproject/about.html">ABOUT US</a>
  </li>
 
</ul>
	<div class="container" align="center">

	<form action="/dbmsproject/check.php" method="post">

	<br>
		<input type="text" name="searchcomp" size="50" placeholder="Enter name of company" value="<?php if(!empty($_SESSION["searchcomp"])) echo $_SESSION["searchcomp"];?>">
		  <input type="submit" class="btn btn-primary" name="submit" value="Search"></button>

	<br>
  <br>
  <br>
<p>CGPA: 
		<select name="CGPA">
    		<option value="CGP" selected> none selected</option>
    		<option value="7.5" <?php if($_SESSION["CGPA"]=="7.5") echo "selected"; ?> >greater than 7.5</option>
			<option value="6.5"<?php if($_SESSION["CGPA"]=="6.5") echo "selected"; ?>>greater than 6.5</option>
			<option value="6" <?php if($_SESSION["CGPA"]=="6") echo "selected"; ?>>less than 6.5</option>
		</select>
		<!-- <select class="multi-select-demo" name="branch[]" multiple="multiple">
			<option value="b" disabled="" >Branch</option>
			<option value="c1">Computer 1st shift</option>
			<option value="c2">Computer 2nd shift</option>
			<option value="it">IT</option>
			<option value="entc1">ENTC 1st shift</option>
			<option value="entc2">ENTC 2nd shift</option>	
		</select> -->
Salary:
		<select name="Salary">
			<option value="sal"selected >none selected</option>
    		<option value="12" <?php if($_SESSION["Salary"]=="12") echo "selected"; ?>>greater than 12</option>
    		<option value="8"<?php if($_SESSION["Salary"]=="8") echo "selected"; ?>>greater than 8</option>
			<option value="5"<?php if($_SESSION["Salary"]=="5") echo "selected"; ?>>greater than 5</option>
			<option value="l5"<?php if($_SESSION["Salary"]=="l5") echo "selected"; ?>>less than 5</option>
		</select>

Year:
<select required name="year">
  <option value="">none selected</option>
  <option value="report18"<?php if($_SESSION["year"]=="report18") echo "selected"; ?>>2018</option>
  <option value="report17"<?php if($_SESSION["year"]=="report17") echo "selected"; ?>>2017</option>
  <option value="report16"<?php if($_SESSION["year"]=="report16") echo "selected"; ?>>2016</option>
  <option value="report15"<?php if($_SESSION["year"]=="report15") echo "selected"; ?>>2015</option>
</select>


Sort By:
<select name="sortby">
	<option value="v1"selected >none selected</option>
	<option value="CRITERIA_CGPA" <?php if($_SESSION["sortby"]=="CRITERIA_CGPA") echo "selected"; ?>>CGPA (asc)</option>
	<option value="CRITERIA_CGPA DESC"<?php if($_SESSION["sortby"]=="CRITERIA_CGPA DESC") echo "selected"; ?>>CGPA (desc)</option>
	<option value="SALARY"<?php if($_SESSION["sortby"]=="SALARY") echo "selected"; ?>>Salary (asc)</option>
	<option value="SALARY DESC"<?php if($_SESSION["sortby"]=="SALARY DESC") echo "selected"; ?>>Salary (desc)</option>
	<option value="VISIT_DATE"<?php if($_SESSION["sortby"]=="VISIT_DATE") echo "selected"; ?>>Visit date (asc)</option>
	<option value="VISIT_DATE DESC"<?php if($_SESSION["sortby"]=="VISIT_DATE DESC") echo "selected"; ?>>Visit date (desc)</option>
</p>
</select>



		</form>
  </div>
 




<?php
if ($result->num_rows > 0) {
	?>
	<table cellpadding="10" cellspacing="10">
		<tr>
			<th>Company</th>
			<th>CGPA</th>
			<th>Criteria: Branch</th>
			<th>BE CE 1st Shift</th>
			<th>BE CE 2nd Shift</th>
			<th>BE ENTC 1st Shift</th>
			<th>BE ENTC 2nd Shift</th>
			<th>BE IT</th>
			<th>ME CE</th>
			<th>ME ENTC</th>
			<th>ME IT</th>
			<th>Males</th>
			<th>Females</th>
			<th>Total</th>
			<th>Salary</th>
			<th>Visit Date</th>
			<th>Total Salary</th>
		</tr>
   <?php
	
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["COMPANY"]. " </td><td> " .
         $row["CRITERIA_CGPA"]. " </td><td> ".
          $row["CRITERIA_BRANCH"]. " </td><td> " . 
          $row["BE_CE_1st_SHIFT"]. " </td><td> ".
           $row["BE_CE_2nd_SHIFT"]. " </td><td> ".
           $row["BE_ENTC_1st_SHIFT"]. " </td><td> ".
           $row["BE_ENTC_2nd_SHIFT"]. " </td><td> ".
           $row["BE_IT"]. " </td><td> ".
          $row["ME_CE"]. " </td><td> ".
           $row["ME_ENTC"]. " </td><td> ".
           $row["ME_IT"]. " </td><td> ".
           $row["MALES"]. " </td><td> ".
           $row["FEMALES"]. " </td><td> ".
           $row["TOTAL"]. " </td><td> ".
           $row["SALARY"]. " </td><td> ".
           $row["VISIT_DATE"]. " </td><td> ".
            $row["TOTAL_SALARY"]. "</td></tr>";
    }
    echo "</table>";

} 
else {
    echo "<center>0 results</center>";
}

 
?> 
</table>
</body>
</html>
