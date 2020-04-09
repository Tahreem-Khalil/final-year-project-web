<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="css/signupstyle.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<h3 class="loginform-title">Admin Sign Up</h3>
			<form id="login" class="input-group" action="login.php" method="post">
                <input type="email" class="input-field" name="coordinator_email" placeholder="Enter Email" required/>
				<input type="password" class="input-field" name="coordinator_password" placeholder="Enter Password" required/>
                <input type="password" class="input-field" name="coordinator_password2" placeholder="Repeat Password" required/>
                <input type="number" class="input-field" name="coordinator_CNIC" placeholder="Enter CNIC" required/>
                <input type="text" class="input-field" name="coordinator_name" placeholder="Enter Your Name" required/>
                <input type="text" class="input-field" name="coordinator_role" placeholder="Enter Your Role" required/>
                <input type="text" class="input-field" name="coordinator_gender" placeholder="Enter Your Gender" required/>
                <input type="number" class="input-field" name="coordinator_phone_no" placeholder="Enter Phone no" required/>
				<button type="submit" class="submit-btn" name="signUpButton">Sign Up</button>
            </form>
		</div>
	</div>
</body>
</html>