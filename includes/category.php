<?php 

$id = $_GET['id'];

$sql = "SELECT * FROM category WHERE category_id=$id";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

?>

<div class="col-9">
		
	<h1><?php echo $row['category_name']; ?></h1>
	<span class="headcount">53</span><img class="snippet_icon" src="assets/img/snippet.png" width="35">

	<div class="sort">
		<label for="sort">Sort by</label>
		<select class="sortOption" name="sort">
			<option>Popularity</option>
			<option>Latest</option>
			<option>Oldest</option>
			
		</select>
	</div>
	<div class="clearfix">
	
	<?php 


	$sql = "SELECT *, count(comments.comments_id) as antal_comment, count(likes.likes_up) as liked 
		FROM snippet
		INNER JOIN users ON snippet.fk_user_id=users.users_id
		LEFT JOIN comments ON snippet.snippet_id=comments.fk_snippet_id
		LEFT JOIN likes ON snippet.snippet_id=likes.fk_snippet_id
		INNER JOIN category ON snippet.fk_category_id=category.category_id
		";
	

	$result = mysqli_query($con, $sql);




	while($row = mysqli_fetch_array($result)){ 
	
		if($row['fk_category_id'] == $id){
?>
		<div class="col-6">
			<section class="snippet">		
				<a href="index.php?side=code&id=<?php echo $row['snippet_id']; ?>"><img src="#" class="thumbnail"></a>
				<a href="index.php?side=code&id=<?php echo $row['snippet_id']; ?>"><h2><?php echo $row['snippet_headline']; ?></h2></a>
				<p>
					<?php echo substr($row['snippet_content'], 0, 215)."..."; ?>
					<a class="readmore" href="index.php?side=code">READ MORE</a>
				</p>
				
				<div class="details col-12">
					<div class="author left">
						<p>By <a href="index.php?side=profile&id=<?php echo $row['users_id']; ?>"><?php echo $row['users_name']; ?></a> on <?php echo $row['snippet_date']; ?></p>
					</div>

					<div class="status right">
						<span><?php echo $row['liked']; ?></span><img src="assets/img/like.png">

						<span><?php echo $row['antal_comment']; ?></span><img src="assets/img/comments.png">
					</div>
					<div class="clearfix"></div>
				</div>
				
			</section>
		</div>


	<?php
		}
	}
	?>
	

		

<!-- REKLAME -->
<div class="clearfix"></div>
	<div class="col-12">
		<article>
			Advertisement
		</article>
	</div>
<div class="clearfix"></div>
<!-- REKLAME SLUT -->


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



	</div>
</div>


<aside class="asideCatPage">
	<div class="col-12">	
		<section>
			<p>advertisement</p>
		</section>
			
	</div>

	<div class="col-12">
		<section>
			<p>Dummy Data Dummy Data Dummy Data Dummy Data Dummy Data Dummy Data</p>
		</section>
	</div>

	<div class="clearfix"></div>
</aside>