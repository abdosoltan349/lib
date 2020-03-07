<!--header id="header" class="alt">
    <div style="width: 40%;height:50px ;">
        <a href="index.php" class="logo">
            <img id="IQ" src="<?php echo $images?>Logo_crop_1.png">
        </a>
    </div>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header-->

<nav style="text-align: center ;background-color: #2a2f4a;" >
    <div style="width: 40%;height:50px ;">
        <a href="index.php" class="logo">
            <img src="<?php echo $images?>navImg.jpg" style="width: 80px; height: 60px; margin-bottom: 8px;">
        </a>
    </div>
    <a href="#menu">Menu</a>
</nav>

<!--nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="types.html">Types</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="Features.html">Features</a></li>
    </ul>
    <ul class="actions stacked">
    <li><form method = "POST" action = "<?php echo $_SERVER["PHP_SELF"]?>">
    <input type = "submit" class="button primary fit" id ="btn-logout" value = "logout"></input>
    </li>
        <li <?php if(isset($_SESSION["username"])){echo "hidden";}?>><a href="login.php" class="button fit">Log In</a></li>
    </ul>
</nav-->