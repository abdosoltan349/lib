<!DOCTYPE html>
	<?php
	include "init.php";
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
                <form name="myform" id="myform" class="register-form">
                  <!--  <input type="text" maxlength="20" minlength="3" id="name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' placeholder="User Name" required/>
                -->
                    <input type="email" placeholder="Email" id="mail" name="mail" required />
                    <input type="password" maxlength="20" minlength="8" id="password" name="password" placeholder="Password" required/>
                    <input type="password" maxlength="20" minlength="8" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required/>
                    <button  onclick="signup()">Create</button>
                    <p class="message">Already Registered <a href="#">Login</a></p>
                </form>
                <form class="login-form">
                    <input type="email" id="Uname" maxlength="30" minlength="3"  placeholder="Email" required/>
                    <input type="password" id="pass" maxlength="30" minlength="8" placeholder="Password" required/>
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
  
        <script>
       
              //  window.location.href="index.html";
       

        </script>

        
    </body>
</html>
