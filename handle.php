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

if(isset($_POST["updbtn"]))
{
	$sql='update '.$_POST["year"].' set '.$_POST["options"].'= "'.$_POST["newval"].'" where COMPANY = "'.$_POST["comp"].'"';

	$result=$conn->query($sql);
	if($result===TRUE)
	{
		if(mysqli_affected_rows($conn)>0)
	    echo "Record updated successfully";
		else
		echo "No matching records found";
	}
	else
		{
			echo "invalid query: ".$conn->error;
		}
	header("refresh:2;url=/dbmsproject/update.php");
}

if(isset($_POST["csub"]))
{
	$var="report".$_POST["tbname"];
	$sql= "CREATE TABLE `".
	$var. 
"` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sr._No.` int(11) NOT NULL,
  `COMPANY` varchar(25) DEFAULT NULL,
  `CRITERIA_CGPA` varchar(5) DEFAULT NULL,
  `CRITERIA_BRANCH` varchar(25) DEFAULT NULL,
  `BE_CE_1st_SHIFT` varchar(5) DEFAULT NULL,
  `BE_CE_2nd_SHIFT` varchar(5) DEFAULT NULL,
  `BE_ENTC_1st_SHIFT` varchar(5) DEFAULT NULL,
  `BE_ENTC_2nd_SHIFT` varchar(5) DEFAULT NULL,
  `BE_IT` varchar(5) DEFAULT NULL,
  `ME_CE` varchar(5) DEFAULT NULL,
  `ME_ENTC` varchar(5) DEFAULT NULL,
  `ME_IT` varchar(5) DEFAULT NULL,
  `MALES` int(11) NOT NULL,
  `FEMALES` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `SALARY` decimal(12,2) DEFAULT NULL,
  `VISIT_DATE` datetime DEFAULT NULL,
  `TOTAL_SALARY` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`report_id`),
  KEY `MALES_index` (`MALES`),
  KEY `FEMALES_index` (`FEMALES`),
  KEY `TOTAL_index` (`TOTAL`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

echo $sql;
$result = $conn->query($sql);
if($result===TRUE)
{
	echo "Table created successfully";
}
else
{
	echo $conn->error;
}
   header("refresh:2;url=/dbmsproject/admin.php");

	 
}

?>

</body>
</html>
