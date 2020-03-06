<!DOCTYPE html>
<?php
	include "init.php";
	session_start();
	if(isset($_SESSION["username"])){
		header("Location: index.php");
        exit();
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
        $pass = $_POST["pass"];
        $stmt = $conn->prepare("SELECT email,pas FROM users WHERE email = ? AND pas = ?");
        $stmt->execute(array($email,$pass));
        $count = $stmt->rowCount();
        if($count > 0){
            $_SESSION["username"] = $email;
            header("Location: index.php");
            exit();
        }
	}
	?>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="layout/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/vendor/bootstrap/layout/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/fonts/font-awesome-4.7.0/layout/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="layout/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/css/util.css">
	<link rel="stylesheet" type="text/css" href="layout/css/mainlogin.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="layout/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action = "<?php echo $_SERVER["PHP_SELF"]?>" method = "POST">
					<span class="login100-form-title">
						Member Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="layout/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="layout/vendor/bootstrap/js/popper.js"></script>
	<script src="layout/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="layout/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="layout/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="layout/js/mainlogin.js"></script>

</body>
</html>