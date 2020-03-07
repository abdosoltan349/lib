<!DOCTYPE HTML>
<?php
	include "init.php";
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
        exit();
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		unset ($_SESSION["username"]);
		header("Location: login.php");
        exit();
	}
	?>
<html lang="en">
    <head>
		<title>Books</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- Stylesheets -->
		<noscript><link rel="stylesheet" href="<?php echo $css?>noscript.css" /></noscript>
        <link rel="stylesheet" href="<?php echo $css?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $css?>style.css">
        <link rel="stylesheet" href="<?php echo $css?>header.css">
        
        <link rel="icon" href="<?php echo $images?>logo.png">
		
        <style>
            #IQ{
            width: 80px;
            height: 60px;  
                float: right;
            }
        
        </style>
	</head>
	<body class="is-preload">
        <div id="wrapper">
            <?php
                include $tpl."header.php";
            ?>
            <?php
                include $tpl."nav.php";
            ?>
            <?php
                include $tpl."footer-forAll.php";
            ?>
        </div>
    </body>
</html>