<!DOCTYPE html>
<html>
<head>
<title>Login </title>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<h3 class="loginform-title">Admin Login</h3>
			<form id="login" class="input-group" action="login.php" method="post">
                <input type="email" class="input-field" name="coordinator_email" placeholder=" Enter Email" required>
					<input type="password" class="input-field" name="coordinator_password" placeholder=" Enter Password" required/>
				    <button type="submit" class="submit-btn" name="loginButton">Log in</button>
                <p><a href="signUp.php">Sign Up</a></p>
            </form>
		</div>
	</div>
</body>
</html>