<!DOCTYPE html>
<?php 
 include "init.php";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
	     $signinemail = $_POST["email"];
        $signpass =  $_POST["password"];
		$stmt = $conn->prepare("INSERT INTO users(email,pas) VALUES (:semail,:spass)");
            $stmt->execute(array(
                "semail" => $signinemail,
                "spass" => $signpass
            ));
			 header("Location: login.php");
			exit();
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="layout/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="layout/css/signupstyle.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="layout/images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?php echo $_SERVER["PHP_SELF"]?>">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
          
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="layout/vendor/jquery/jquery.min.js"></script>
    <script src="layout/js/signupmain.js"></script>
</body>
</html>