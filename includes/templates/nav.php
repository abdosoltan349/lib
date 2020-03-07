
					<nav id="menu">
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
					</nav>