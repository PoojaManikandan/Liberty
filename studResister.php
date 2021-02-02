<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>
	<style type="text/css">
		.abc{
			border: 5px solid black;
			background-color: #0cbaba;
background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);

			margin: 100px;
			padding: 100px 200px;
		}
		.he{
			text-align: center;
		}
		label{
			color:white;
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
			<a href="StudLogin.php">BACK</a>
		</nav>
	</div>
	<div class="he">
		<p>
			<h2>ENTER THE FOLLWING DETAILS...</h2>
			DO NOT OMIT ANY FIELD
		</p>
	</div>
	<div class="abc">
		<form action="process.php" method="post">
			<label for="regno">REGISTRATION NO:</label><br>
			<input type="text" id="regno" name="regno"required><br><br>
			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" required><br><br>
			<label for="dob">DOB(dd-mm-yyyy)</label><br>
			<input type="date" id="dob" name="dob"required><br><br>
			<label for="gender">GENDER</label><br>
			<input type="text" id="gender" name="gender"><br><br>
			<label for="email">EMAIL</label><br>
			<input type="email" id="email" name="email" required><br><br>
			<label for="adrr">RESIDENTIAL ADDRESS:</label><br>
			<input type="text" id="addr" name="addr"required><br><br>
			<label for="rno">ROLL NO:</label><br>
			<input type="text" id="rno" name="rno"required><br><br>
			<label for="dept">DEPARTMENT:</label><br>
			<input type="text" id="dept" name="dept"required><br><br>
			<label for="staffid">STAFF ID:</label><br>
			<input type="text" id="staffid" name="staffid"required><br><br>
			<label for="password">PASSWORD</label><br>
			<input type="password" id="password" name="password"><br><br>
			<label for="rpassword">RE-ENTER PASSWORD</label><br>
			<input type="password" id="rpassword" name="rpassword"><br><br>
			<label>CHOOSE AN OPTION FOR SECURITY PURPOSE:<br>WHAT IS THE NAME OF YOUR PET??</label><br>
			<input type="text" id="sec" name="sec"><br><br>
			<input type="submit" name="btn-save" height="200" width="200"><br><br>
		</form>
	</div>
</body>
</html>