<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>
	<style type="text/css">
		.hea{
			text-align: center;
		}
		.ab{
			border: 5px solid black;
			background-color: #461220;
			background-image: linear-gradient(315deg, #461220 0%, #e0d4ae 74%);

			margin: 100px;
			padding: 100px 200px;
		}
	</style>
	<script type="text/javascript">
		function show(){
			var txt="Details successfully submitted";
			alert(txt);
		}
	</script>
</head>
<body>
	<div>
		<nav>
			<a href="staffLogin.php">BACK</a>
		</nav>
	</div>
	<div class="hea">
		<p>
			<h2>ENTER THE FOLLWING DETAILS...</h2>
			DO NOT OMIT ANY FIELD
		</p>
	</div>
	<div class="ab">
		<form action="process1.php" method="post" >
			<label for="staffid">STAFF ID:</label><br>
			<input type="text" id="staffid" name="staffid"required><br><br>
			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" required><br><br>
			<label for="dept">DEPARTMENT:</label><br>
			<input type="text" id="dept" name="dept"required><br><br>
			<label for="password">PASSWORD</label><br>
			<input type="password" id="password" name="password"><br><br>
			<label for="password">RE-ENTER PASSWORD</label><br>
			<input type="password" id="password" name="rpassword"><br><br>
			<p>CHOOSE AN OPTION FOR SECURITY PURPOSE:<br>WHAT IS THE NAME OF YOUR PET??</p><br>
			<input type="text" id="sec" name="sec"><br><br>
			<input type="submit" name="btsave" height="200" width="200"><br><br>
		</form>
	</div>
</body>
</html>