<!DOCTYPE html>
	<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: index.php");
        exit();
    }
    include "init.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $confirmpass = $_POST["confirmpassword"];
        $signinemail = $_POST["mail"];
        $signpass =  $_POST["password"];
        if(isset($confirmpass)){
            $stmt = $conn->prepare("INSERT INTO users(email,pas) VALUES (:semail,:spass)");
            $stmt->execute(array(
                "semail" => $signinemail,
                "spass" => $signpass
            ));
            $_SESSION["username"] = $signinemail;
            header("Location: index.php");
            exit();
        }
        if(!isset($confirmpass)){
        $email = $_POST["logmail"];
        $pass = $_POST["passwordlogin"];
        $stmt = $conn->prepare("SELECT email,pas FROM users WHERE email = ? AND pas = ?");
        $stmt->execute(array($email,$pass));
        $count = $stmt->rowCount();
        if($count > 0){
            $_SESSION["username"] = $email;
            header("Location: index.php");
            exit();
        }
    }
}
	?>
<html>
    <head>
        <meta charset="utf-8">
        <title>IQRAA | Sign</title>
        <link rel="stylesheet" href="<?php echo $css?>signup.css" type="text/css">
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
       
        
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form  class="register-form" action = "<?php echo $_SERVER["PHP_SELF"]?>" name="myform"  method = "POST" >
                  <!--  <input type="text" maxlength="20" minlength="3" id="name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' placeholder="User Name" required/>
                -->
                    <input type="email" name="mail" placeholder="Email" id="mail"  required />
                    <input type="password" name="password" maxlength="20" minlength="8" id="password"  placeholder="Password" required/>
                    <input type="password" name="confirmpassword" maxlength="20" minlength="8" id="confirmpassword"  placeholder="Confirm Password" required/>
                    <button  onclick="signup()">Create</button>
                    <p class="message">Already Registered <a href="#">Login</a></p>
                </form>
                <form class="login-form" action = "<?php echo $_SERVER["PHP_SELF"]?>" method = "POST">
                    <input type="email" name="logmail" id="Uname" maxlength="30" minlength="3"  placeholder="Email" required/>
                    <input type="password" name = "passwordlogin" id="pass" maxlength="30" minlength="8" placeholder="Password" required/>
                    <button id="btn-login" onclick="signin()">login</button>
                    <p class="message">Not Registered? <a href="#">Register</a></p>
                    <a href="forgetThePassword.html"><p style="color: ivory;">forget the password?</p></a>
                </form>
            </div>
        </div>

        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        </script>
        <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
        </script>
        <script>
            jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
            });
            $( "#myform" ).validate({
            rules: {
                password: "required",
                confirmpassword: {
                equalTo: "#password"
                }
            }
            });
            $( "#myform" ).validate({
                rules: {
                    field: {
                    required: true,
                    email: true
                    }
                }
            });
        </script>
  

        
    </body>
</html>
