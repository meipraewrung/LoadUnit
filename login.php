<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!--===============================================================================================-->
	<title>Sign In</title>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="section">
					<div class="video-container">
						<div class="color-overlay"></div>
						<video autoplay loop muted>
							<source src="images/video/CollegeofComputing2.mp4" type="video/mp4">
						</video>
					</div>
				</div>

				<?php
					require('db.php');
					session_start();
					if (isset($_POST['submit'])) {

						// Checking is user existing in the database or not
						$query = "SELECT * FROM staff WHERE staff_email='" . $_POST['email'] . "' AND staff_password='" . $_POST['password'] . "'";
						$result = mysqli_query($connect, $query) or die(mysql_error());

						if (mysqli_num_rows($result) == 1) {
							$row = mysqli_fetch_array($result);
							$_SESSION['staff_email'] = $row['staff_email'];
							$_SESSION['staff_password'] = $row['staff_password'];
							$_SESSION['staff_nameSur'] = $row['staff_nameSur'];
							// Redirect user to home.php
							header("Location: home.php");
						} else {
							echo 	"<center><div class='form'>
											<h1>Username/Password is incorrect.</h1>
											<br> Click here to <a href='login.php'>SignIn</a>
										</div></center>";
						}
					} else {
				?>

					<form class="login100-form validate-form" method="POST" name="login_form">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter email.">
							<span class="label-input100">E-mail</span>
							<input class="input100" type="text" name="email" placeholder="Enter email">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-18" data-validate="Please enter password.">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="password" placeholder="Enter password">
							<span class="focus-input100"></span>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="submit">
								<b>Sign In</b>
							</button>
						</div>
					</form>

				<?php
					}
				?>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
</body>

</html>