<h1>Navigation</h1>

<div class="col-3">
	<article>
		<h2>Dine Links</h2>
		<?php 

			$sql = "SELECT * FROM navigation";

			$result = mysqli_query($con, $sql);

			while($row = mysqli_fetch_array($result)){ ?>

			<div class="menu">
				<?php echo $row['navn']; ?>
			</div>
			
		<?php }
		?>
	</article>
</div>

<div class="col-9">
	<article>
		<h2>Nuværende Navigation</h2>
		asdgasdgasdg
	</article>
</div>