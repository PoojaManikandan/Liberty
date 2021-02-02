<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>
	<style type="text/css">
        body{
            background-color: #f9c1b1;
background-image: linear-gradient(315deg, #f9c1b1 0%, #fb8085 74%);

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
	<form action="attenprocess.php" method="post">
	<table width="100%">
		<tr >
			<th><label for="regno">REG NUM</label></th>
			<th><label for="pres">DAYS PRESENT</label></th>
			<th><label for="total">TOTAL DAYS</label></th>
			<th></th>
		</tr>
		<tr>
			<td><input type="text" id="regno" name="regno" size="25"></td>
			<td><input type="text" id="pres" name="pres" size="1"></td>
			<td><input type="text" id="total" size="1" name="total"></td>
			<td><input type="submit" name="attend-save"></td>
		</tr>
		
	</table>
	</form>
	<br><br><br><br>
	<a href="admin.php"><input type="button" value="DONE" height="1000" width="1000" name=""><br><br><br><br></a>
	<div>
		
		<form action="attenprocess.php" method="post">
		<p>DO YOU WANT TO CLEAR THE ATTENDENCE OF A STUDENT </p>
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