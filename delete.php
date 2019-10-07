<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
	 <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="input-group">
	<form action="/dbmsproject/handle.php" method="post">
<span>SELECT YEAR:</span>
<select required name="year" class="input-group">
  <option value="">none selected</option>
  <option value="report18">2018</option>
  <option value="report17">2017</option>
  <option value="report16">2016</option>
  <option value="report15">2015</option>
</select>
<br/>
<span>
ENTER NAME OF COMPANY TO DELETE RECORD:
</span>
<input type="text" name="compname" required="" class="input-group">
<br/>
<br>
<input type="submit" name="dsub" value="Delete record" class="btn btn-primary"></button>

</form>
</body>
</html>

