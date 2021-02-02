<!DOCTYPE html>
<html>
<head>
	<title>LIBERTY INSTITUTE APP</title>

</head>
<body >
	<div style="background-color: grey">
		<nav>
			<a href="index.php">BACK TO HOME</a>
		</nav>
	</div>
	<link rel="stylesheet" type="text/css" href="stlog.css">
	<div class="basic">
		<p>
			<h2>STUDENT LOGIN</h2>
			<h3>Welcome to student portal</h3>
			<h1>LOGIN</h1>
		</p>		
	</div>
	<div class="log">
		<form action="studLogProcess.php" method="post">
			<label for="regNo">Register No</label>
			<input type="text" id="regNo" name="regNo"><br><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password"><br><br><br>
			<input type="submit" value="LOGIN" name="stbut" height="500" width="500" class="but">
			<a href="ForgetPassword.php">Forgot password?</a><br><br><br>
			<a href="studResister.php">Do not have account? SIGNUP</a>

		</form>
	</div>
</body>
</html>