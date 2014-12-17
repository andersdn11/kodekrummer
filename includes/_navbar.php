<nav class="clearfix">
		<div class="container">
			<ul>
			<?php
				$sql = "SELECT * FROM navigation";
				$perform = mysqli_query($con, $sql);

				while($row = mysqli_fetch_assoc($perform)){?>
					<li><a href="index.php?side=<?php echo $row['link']; ?>"><?php echo $row['navn']; ?></a></li>
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
					<a href="#" class="btn">Login</a>
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



