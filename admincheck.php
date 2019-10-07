<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_POST["submit"]))
{
	$var = $_POST["some"];
	echo "Redirecting...";
	switch ($var) {
		case "update":
		header("refresh:1;url=/dbmsproject/update.php");
			break;
		case "delete":
		header("refresh:1;url=/dbmsproject/delete.php");
		break;
		case "insert":
		header("refresh:1;url=/dbmsproject/insert.php");
		break;
		default:
			# code...
			break;
	}
}

?>






</body>
</html>