<?php 
session_start(); ob_start();

include('includes/_connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Look up snippets in HTML/CSS, Javascript, SQL, PHP, .NET and more">
<meta name="author" content="Caspar">
<title>Ever expanding snippets library</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/zenburn.min.css"> <!--highlight.js -->
<link type="text/css" rel="stylesheet" href="assets/css/main.css">


</head>

<body>
	<header>

		<div class="container">
			<div class="col-5"><a href="index.php"><img src="assets/img/logo.png"></a></div>
			
			<div class="col-7">
			
				<a class="logout" rel="Logout" href="#"></a>
				<a class="setting" href="#"></a>
				<a class="profile" href="#"></a>
		
				<form>
					<input type="submit" value="">
					<input type="text" placeholder="Søg...">
				</form>
			</div>
		</div>
	</header>
	
	<?php include('includes/_navbar.php'); ?>

	<div class="container">

		<main>			
			<?php

				if(isset($_GET['side'])){
					include('includes/' . $_GET['side'] . '.php');
				}else{
					include('includes/forside.php');
				}

			?>
		</main>
		<div class="col-9">
			<footer></footer>
		</div>
		
	</div>

	<!-- Jquery Library -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<!-- HIGHLIGHT.js -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script src="assets/js/frontend.js"></script>

</body>
</html>
