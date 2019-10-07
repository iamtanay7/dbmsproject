<?php
include 'establish.php';
  ?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>


<?php


$sql1="";
if(isset($_POST["dsub"]))
{
	$sql1 = 'delete from '.$_POST["year"].' where COMPANY="'.$_POST["compname"].'"';
	$sql1.=";";
$result = $conn->query($sql1);
if ($result === TRUE) {
	if(mysqli_affected_rows($conn)>0)
    echo "Record deleted successfully";
	else
	echo "No records found";
   header("refresh:2;url=/dbmsproject/admin.php");

} else {
    echo "Error deleting record: " . $conn->error;
}
}


if(isset($_POST["isub"]))
{
$day1 = strtotime($_POST["date1"]);
$day1 = date('Y-m-d H:i:s', $day1);

$total = $_POST["males"]+$_POST["females"];
$total_sal = $total * $_POST["salary"];


	$sql='insert into '.$_POST["year"].
	' (COMPANY, CRITERIA_CGPA, CRITERIA_BRANCH, BE_CE_1st_SHIFT,
BE_CE_2nd_SHIFT, BE_IT, BE_ENTC_1st_SHIFT, BE_ENTC_2nd_SHIFT,
ME_CE, ME_ENTC, ME_IT, MALES, FEMALES, TOTAL ,SALARY,VISIT_DATE,TOTAL_SALARY)
 values ('.'"'.
$_POST["company"].'"'.','
.'"'.$_POST["cgpa"].'"'.','.'"'.
$_POST["branchc"].'"'.','.
$_POST["ugce1"].','.$_POST["ugce2"].','.$_POST["ugit"].','.$_POST["ugentc1"].','.$_POST["ugentc2"].','.$_POST["pgce"].','.$_POST["pgentc"].','.$_POST["pgit"].','.$_POST["males"].','.$_POST["females"].','.$total.','.$_POST["salary"].','.'"'.$day1.'"'.','.$total_sal.')';

//echo $sql;
$result = $conn->query($sql);

if ($result === TRUE) {
	if(mysqli_affected_rows($conn)>0)
    echo "Record added successfully";
   header("refresh:2;url=/dbmsproject/admin.php");
} 
else {
    echo "Error inserting record: " . $conn->error;
}
}


?>

</body>
</html>
