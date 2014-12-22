<div class="col-9">
		
	<h1>Trending snippets</h1>	
	
	<div class="clearfix"></div>
	<!-- SNIPPET START -->

	<?php 

	$sql = "SELECT * FROM snippet INNER JOIN users ON snippet.fk_users_id=users.users_id";

	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_array($result)){

	?>

		<div class="col-6">
			<section class="snippet">	
				<a href="#"><img src="#" class="thumbnail"></a>
				<a href="#"><h2><?php echo $row['snippet_headline']; ?></h2></a>
				<p>	

					<?php echo substr($row['snippet_content'], 0, 215)."..."; ?>
					<a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="index.php?side=profile"><?php echo $row['users_name']; ?></a> on <?php echo $row['snippet_date']; ?></p>
					</div>

					<div class="status right">
						<span><?php echo $row['snippet_headline']; ?></span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
				
			</section>
		</div>

	<?php 
	}
	?>
<!-- SNIPPET SLUT -->

<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
	</div>
	<!-- SNIPPET SLUT -->

<a href="#" class="right">See more..</a>
		<div class="clearfix"></div>
		</br></br></br>


			<h1>New snippets</h1>

	
	<div class="clearfix"></div>
	<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="#" class="thumbnail"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
				
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
<!-- SNIPPET SLUT -->
<!-- SNIPPET START -->
		<div class="col-6">
			<section class="snippet">		
				<a href="#"><img src="" width="98" height="98"></a>
				<a href="#"><h2>Simple jQuery slider</h2></a>
				<p>
					Lorem ipsum dolor sit amet, 
					sonet mucius diceret mea ei, 
					no mei vivendum assueverit 
					concludaturque. 
					Ludus nominati quo in. 
					Essent alienum salutatus quo no, 
					vidisse tamquam te vix. 
					... <a class="readmore" href="http://localhost/kodekrummer/index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="">CodeBadass</a> on 13 oct. 2014</p>
					</div>

					<div class="status right">
						<span>21</span><img src="assets/img/like.png">

						<span>41</span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
	</div>
	<!-- SNIPPET SLUT -->
<a href="#" class="right">See more..</a>


		<div class="clearfix"></div>
		</br></br></br>
	
	<div class="col-12">
		<article>
			<h1>Ever expanding code library</h1>
	
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. 
				Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.
				 Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, 
				 et tristique turpis ligula sit amet ligula. Integer et consequat nisl. 
				 Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. 
				Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.
				 Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, 
				 et tristique turpis ligula sit amet ligula. Integer et consequat nisl. 
				 Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.
			</p>
		</article>
	</div>


</div>



<aside class="asideFrontPage">
	<div class="col-12">	
		<section>
			<h3>We're this popular!</h3>
			<ul>
				<li><p>Users <span>23</span></p></li>
				<li><p>Comments <span>280</span></p></li>
				<li><p>Snippets <span>210</span></p></li>
			</ul>

			<a href="#" class="joinBtn">JOIN!</a>
			
		</section>
			
	</div>

	<div class="col-12">
		<section>
			<p>Dummy Data Dummy Data Dummy Data Dummy Data Dummy Data Dummy Data</p>
		</section>
	</div>

	<div class="clearfix"></div>
</aside>