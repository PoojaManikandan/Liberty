<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>
	<style type="text/css">
		body{
			background-color: #63a4ff;
background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);
		}
		table,th,td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		tr:nth-child(even) {
		  background-color: #eee;
		}
		tr:nth-child(odd) {
			background-color: #ffffff;
		}
		th {
		background-color: black;
		color: white;
		}
		input[type="text"]{
			background-color:transparent;
			padding:7px;
			margin:5px;
			
		}
		td{
			text-align:center;
		}
	</style>

</head>
<body>
	<form action="marprocess.php" method="post">
	<table width="100%">
		<tr >
			<th><label for="regno">REG NUM</label></th>
			<th><label for="s1">S1</label></th>
			<th><label for="s2">S2</label></th>
			<th><label for="s3">S3</label></th>
			<th><label for="s4">S4</label></th>
			<th><label for="s5">S5</label></th>
			<th></th>
		</tr>
		<tr>
			<td><input type="text" id="regno" name="regno" size="25"></td>
			<td><input type="text" id="s1" name="s1" size="1"></td>
			<td><input type="text" id="s2" size="1" name="s2"></td>
			<td><input type="text" id="s3" name="s3" size="1"></td>
			<td><input type="text" id="s4" size="1" name="s4"></td>
			<td><input type="text" id="s5" size="1" name="s5"></td>
			<td><input type="submit" name="mark-save"></td>
		</tr>
		
	</table>
	</form>
	<br><br><br><br>
	<a href="admin.php"><input type="button" value="DONE" height="1000" width="1000" name=""><br><br><br><br></a>
	<div>
		
		<form action="marprocess.php" method="post">
		<p>DO YOU WANT TO CLEAR THE MARK OF A STUDENT </p>
		<table width="100%">
		<tr >
			<th><label for="regno">REG NUM</label></th>
			<th></th>
		</tr>
		<tr>
			<td><input type="text" id="regno" name="regno" size="25"></td>
			<td><input type="submit" name="reset-btn"></td>
		</tr>
		</table>
		</form>
	</div>
	

</body>
</html>