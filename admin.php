<!DOCTYPE html>
<html>
<head>
	<title>STAFF LOGIN</title>
	<style type="text/css">
		.main{
			border: 10px solid black;
			background-image: url(photo1.jpg);
			background-repeat:no-repeat;
			background-size:1300px;
			padding:40px;
		}
		.but{
			border-radius: 12px;
			background-color: rgb(49, 15, 102);
			color: white;
			border: 2px solid black;
			transition-duration: 0.4s;
			width:200px;
			height:100px;
		}
		.but:hover{
			background-color: white;
			color: rgb(49, 15, 102);
		}
		
	</style>
</head>
<body>
	<div style="font-size:30px;">
	<?php
		session_start();
		//echo $_SESSION["StaffName"] ;
		echo 'Hello '. $_SESSION["StaffName"].',';
	?>
	</div>
	<div class="main">
		<p ><h1 style="text-align:center;">CHOOSE WHICH ONE YOU NEED TO UPDATE</h1></p><br><br><br><br>
		<a href="mark.php" style="float:left; margin-right:200px; margin-left:200px;"><input type="button" value="MARK" class="but"></a>
		<a href="attendance.php"><input type="button" value="ATTENDENCE" class="but"></a>
	</div>
	<a href="staffLogin.php"><input type="button" style="margin-top:20px; font-size:20px; margin-left:300px; height:40px; width:400px;background-color: #c2eaba;
background-image: linear-gradient(319deg, #c2eaba 0%, #c5f4e0 37%, #efc2cf 100%);
 " value="DO YOU WANT TO LOGOUT?"></a>
</body>
</html>