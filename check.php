<?php
session_start();
$_SESSION["year"]=$_POST["year"];
$_SESSION["CGPA"]=$_POST["CGPA"];
$_SESSION["Salary"]=$_POST["Salary"];


 if(isset($_POST["submit"]))  {

$bool=false;
$bool1=false;
if(isset($_POST["year"])&& $_POST["year"]!=="none")
{
	$sql1="select * from ".$_POST["year"];
}
else
$sql1="select * from report2018 ";    
$search = $_POST["searchcomp"];
$_SESSION["searchcomp"]=$search;
if(strlen($search)!==0)
{
	$sql1=$sql1.' where COMPANY like "%'.$search.'%"';
	$bool=true;	
}


if(isset($_POST["CGPA"]) && $_POST["CGPA"]!=="CGP")
{
$CGPA=$_POST["CGPA"];

if($bool==true )
$sql1.=" and ";
else 
{
$sql1.=" where ";
$bool1=true;
}
	switch ($CGPA) {
		case "7.5":
		$sql1.='CRITERIA_CGPA > 7.5';
		break;
	case "6.5":
		$sql1.='CRITERIA_CGPA > 6.5';
		break;
	case "6":
		$sql1.='CRITERIA_CGPA <= 6.5';
		break;
	default:
	#xyz
	break;
	}
	
}

if(isset($_POST["Salary"]) && $_POST["Salary"]!=="sal")
{
$Salary=$_POST["Salary"];
if($bool==true || $bool1==true)
$sql1.=" and ";
else
$sql1.=" where ";

	$Salary=$_POST["Salary"];
	switch ($Salary) {
		case "12":
		$sql1.='SALARY > 12';
		break;
	case "8":
		$sql1.='SALARY > 8';
		break;
	case "5":
		$sql1.='SALARY > 5';
		break;
	case "l5":
		$sql1.='SALARY <= 5';
		break;
	default:
	#xyz
	break;
	}
	


}


if(isset($_POST['sortby']))
{
	$_SESSION["sortby"]=$_POST["sortby"];
	if($_POST['sortby']!="v1")
	$sql1.=" order by ".$_POST["sortby"];

	}

}
$sql1.=";";
$_SESSION["sql1"]=$sql1;
echo "<center>Processing....</center>";
header("refresh:1;url=/dbmsproject/process.php");


 ?>
