<?php 
include 'establish.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<title>PICT Placements Analysis</title>

	<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
  <ul class="nav nav-pills nav-fill" >
  <li class="nav-item">
    <a class="nav-link active" href="#">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="registration/index.php">LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dbmsproject/about.html">ABOUT US</a>
  </li>
 
</ul>
<div class="jumbotron" >
  <div class="container">
    <h1 class="display-4" style="color:DodgerBlue">PICT Placements Analysis</h1>
    <p class="lead">A tool for analyzing college placements data</p>
  </div>
</div>

	<div class="container" align="center">
	<form action="/dbmsproject/check.php" method="post">

	<br>
  <div class="form-group">
		<input type="text" name="searchcomp" size="50" placeholder="Enter name of company" class="form-control" >
    <br/>
		  <input type="submit" class="btn btn-primary" name="submit" value="Search" class="form-control">
</div>
	<br>
  <br>
  <br>
<div class="jumbotron jumbotron-fluid">
<div class="container">
  CGPA: 
		<select name="CGPA">
    		<option value="CGP" selected> none selected</option>
    		<option value="7.5">greater than 7.5</option>
			<option value="6.5">greater than 6.5</option>
			<option value="6">less than 6.5</option>
		</select>
	
Salary:
		<select name="Salary">
			<option value="sal"selected >none selected</option>
    		<option value="12">greater than 12</option>
    		<option value="8">greater than 8</option>
			<option value="5">greater than 5</option>
			<option value="l5">less than 5</option>
		</select>
Year:
<select required name="year">
  <option value="" >none selected</option>
  <?php 
    $res = $conn->query("show tables");
    
    while($row = $res->fetch_assoc())
    {
      echo '<option value="'.$row["Tables_in_myDB"].'">'.$row["Tables_in_myDB"].'</option>';
      
    }
  ?>
</select>

Sort By:
<select name="sortby">
  <option value="v1"selected >none selected</option>
  <option value="CRITERIA_CGPA">CGPA (asc)</option>
  <option value="CRITERIA_CGPA DESC">CGPA (desc)</option>
  <option value="SALARY">Salary (asc)</option>
  <option value="SALARY DESC">Salary (desc)</option>
  <option value="VISIT_DATE">Visit date (asc)</option>
  <option value="VISIT_DATE DESC">Visit date (desc)</option>

</select>
</div>
</div>
		</form>
  </div>
	
 
<?php

$i=0;
$report = "report2018";
$count="2018";
while ($count>2014)
{

$sql="select sum(TOTAL) as total from $report where SALARY>12 ";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
$var =  $result->fetch_assoc();
$rep[$i]  =  $var['total'];
$i++;

$sql="select sum(TOTAL) as total from $report where SALARY>8 and SALARY<=12 ";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
$var =  $result->fetch_assoc();
$rep[$i]  =  $var['total'];
$i++;

$sql="select sum(TOTAL) as total from $report where SALARY>5 and SALARY<=8 ";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
$var =  $result->fetch_assoc();
$rep[$i]  =  $var['total'];
$i++;

$sql="select sum(TOTAL) as total from $report where SALARY<=5";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
$var =  $result->fetch_assoc();
$rep[$i]  =  $var['total'];
$i++;

$count--;
$report = "report".$count;

}




?>
<table class="columns" width="100%">
      <tr>
        <td><div id="piechart" style="border: 1px solid #ccc"></div></td>
        <td><div id="piechart1" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
        <td><div id="piechart2" style="border: 1px solid #ccc"></div></td>
        <td><div id="piechart3" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>





	 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);


// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Salary', 'No. of students'],
  ['greater than 12 lpa',<?php echo $rep[0]; ?> ],
  ['between 8 and 12 lpa', <?php echo $rep[1]; ?>],
  ['between 5 and 8 lpa', <?php echo $rep[2]; ?>],
  ['less than 5 lpa', <?php echo $rep[3]; ?>]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Placements 2018', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
function drawChart1() {
  var data1 = google.visualization.arrayToDataTable([
  ['Salary', 'No. of students'],
  ['greater than 12 lpa',<?php echo $rep[4]; ?> ],
  ['between 8 and 12 lpa', <?php echo $rep[5]; ?>],
  ['between 5 and 8 lpa', <?php echo $rep[6]; ?>],
  ['less than 5 lpa', <?php echo $rep[7]; ?>]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options1 = {'title':'Placements 2017', 'width':550, 'height':400 };

  // Display the chart inside the <div> element with id="piechart"
  var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart1.draw(data1, options1);
}

function drawChart2() {
  var data1 = google.visualization.arrayToDataTable([
  ['Salary', 'No. of students'],
  ['greater than 12 lpa',<?php echo $rep[8]; ?> ],
  ['between 8 and 12 lpa', <?php echo $rep[9]; ?>],
  ['between 5 and 8 lpa', <?php echo $rep[10]; ?>],
  ['less than 5 lpa', <?php echo $rep[11]; ?>]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options1 = {'title':'Placements 2016', 'width':550, 'height':400 };

  // Display the chart inside the <div> element with id="piechart"
  var chart1 = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart1.draw(data1, options1);
}

function drawChart3() {
  var data1 = google.visualization.arrayToDataTable([
  ['Salary', 'No. of students'],
  ['greater than 12 lpa',<?php echo $rep[12]; ?> ],
  ['between 8 and 12 lpa', <?php echo $rep[13]; ?>],
  ['between 5 and 8 lpa', <?php echo $rep[14]; ?>],
  ['less than 5 lpa', <?php echo $rep[15]; ?>]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options1 = {'title':'Placements 2015', 'width':550, 'height':400 };

  // Display the chart inside the <div> element with id="piechart"
  var chart1 = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart1.draw(data1, options1);
}
</script> 
</body>
</html>