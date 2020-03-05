<!DOCTYPE HTML>
<?php
	include "init.php";
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: signup.php");
        exit();
	}
	?>
<html lang="en">
	<head>
		<title>IQRAA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $css?>main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $css?>noscript.css" /></noscript>
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

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Welcome To IQRAA Society</h1>
							</header>
							<div class="content">
								<p>We can Read here All We need 
										 <br />
										 about any thing in our Library</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="<?php echo $images?>Education.jpeg" alt="Education" />
									</span>
									<header class="major">
										<h3><a href="education.html" class="link">Education</a></h3>
										<p>Books in Schools And Universities</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php echo $images?>history.jpg" alt="History" />
									</span>
									<header class="major">
										<h3><a href="History.html" class="link">History</a></h3>
										<p>Know About the past</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php echo $images?>Art.jpg" alt="art" />
									</span>
									<header class="major">
										<h3><a href="art.html" class="link">Art</a></h3>
										<p>Design your life ^_^</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php echo $images?>stack-of-books-vintage-books-book-books.jpg" alt="novels" />
									</span>
									<header class="major">
										<h3><a href="intro.html" class="link">Novels</a></h3>
										<p>Enjoy with interesting Stories</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php echo $images?>Health.jpg" alt="Health" />
									</span>
									<header class="major">
										<h3><a href="Health.html" class="link">Health</a></h3>
										<p>Be Healthy</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php echo $images?>Travelling.jpg" alt="Travel" />
									</span>
									<header class="major">
										<h3><a href="Coming-Soon.html" class="link">Travel</a></h3>
										<p>Let's discover the world!</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>All Geners</h2>
									</header>
									<p>You can choose any book you can read you can enjoy by travelling in the library  </p>
									<ul class="actions"> 
										<li><a href="types.html" class="button next">Let's Read ^_^</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" required />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email"  required/>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="mailto:iiqraa919@gmail.com">iiqraa919@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+20 1003795292</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Future Academy<br />
										Cairo,Egypt
										</span>
									</div>
								</section>
							</section>
						</div>
					</section>

<?php
	include $tpl."footer.php";
?>
			</div>
		
<script>
function logout() {
 <?php
 session_destroy();
?>
}
</script>
		<!-- Scripts -->
		
			<script src="<?php echo $js?>jquery.min.js"></script>
			<script src="<?php echo $js?>jquery.scrolly.min.js"></script>
			<script src="<?php echo $js?>jquery.scrollex.min.js"></script>
			<script src="<?php echo $js?>browser.min.js"></script>
			<script src="<?php echo $js?>breakpoints.min.js"></script>
			<script src="<?php echo $js?>util.js"></script>
			<script src="<?php echo $js?>main.js"></script>

	</body>
</html>