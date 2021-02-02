<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>
	<style>
		body{
	background-image: url(staff-1.jpg);
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="staffLogstyle.css">
	<div style="background-color: grey">
		<nav>
			<a href="index.php">BACK TO HOME</a>
		</nav>
	</div>
	<div class="topp">
		<p>
			<h2>STAFF LOGIN</h2>
			<h3>Welcome to staff portal</h3>
			<h1>LOGIN</h1>
		</p>		
	</div>
	<div class="logi">
		<form action="staffLogProcess.php" method="post">
			<label for="staffid">Staff id</label>
			<input type="text" id="staffid" name="staffid"><br><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="LOGIN" name="sfbut" height="500" width="500" class="bu">
			<a href="ForgetPassword.php">Forgot password?</a><br><br><br>
			<a href="staffRegister.php">Do not have account? SIGNUP</a>
		</form>
	</div>
</body>
</html>