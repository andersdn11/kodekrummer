<nav class="clearfix">
		<div class="container">
			<ul>
				<li><a href="index.php?side=forside">Forside</a></li>
			<?php
				$sql = "SELECT * FROM category";
				$perform = mysqli_query($con, $sql);



				while($row = mysqli_fetch_assoc($perform)){?>
					<li><a href="index.php?side=category&id=<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a></li>
			<?php } 

			/*$myfile = fopen("newfile.php", "w") or die("Unable to open file!");
			
			$txt = "Mickey Mouse\n";
			fwrite($myfile, $txt);
			$txt = "Minnie Mouse\n";
			fwrite($myfile, $txt);
			fclose($myfile);*/



			?>
			</ul>
			
			<ul>
				<li>
					<a href="#" class="btn" id="loginBtn">Login</a>
					<form action="includes/login.php" method="post">
						<label>Brugernavn</label>
						<input name="user" type="text">
						<label>Adgangskode</label>
						<input name="pass" type="password">

						<input type="submit" value="Log ind">
						<a href="#">Opret Konto +</a>
					</form>
				</li>
			</ul>
			
			
			<div class="clearfix"></div>
		</div>
	</nav>



