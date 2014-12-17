
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="Rapzac">
		<title>CodeCrumbs CMS</title>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
	</head>

	<body>
		<div id="dialog-confirm"></div>
		<div id="tooltip">asfaasdgasdg sdag asdg sadg asdg asdg sadg asdg asdgsf</div>
		<nav>
			<img id="logo" src="../assets/img/logowhite.png">
			<ul>
				<li><a class="active" href="index.php">Kontrolpanel</a></li>
				<li><a href="index.php?side=pages">Sider</a></li>
				<li><a href="index.php?side=navigation">Navigation</a></li>
				<li><a href="index.php?side=settings">Indstillinger</a></li>
				<li><a href="index.php?side=logout">Log af</a></li>
			</ul>
		</nav>
	
		<main>

			<div class="error">FEJL !</div>
			<div class="warning">ADVARSEL !</div>
			<div class="success">SÅDAN !</div>
			<div class="info">INFORMATION</div>
			<?php
				include('../includes/_connect.php');

				if(isset($_GET['side'])){
					include('includes/' . $_GET['side'] . '.php');
				}else{
					include('includes/Kontrolpanel.php');
				}
			?>
		</main>

		<footer></footer>

	<!-- Jquery Library -->

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="../assets/js/backend.js"></script>
	</body>
</html>
	