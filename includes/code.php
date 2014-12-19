<div class="col-9">
	
	<div class="col-12">
		<article>
			<h1>Simple jQuery slider</h1>
			<p class="details">In <a href="">HTML CSS</a> by <a href="">Anders</a> on <b>Oktober 29</b> with <a href="">2 comments</a></p>
			
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. 
				Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.
				 Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, 
				 et tristique turpis ligula sit amet ligula. Integer et consequat nisl. 
				 Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.
			</p>
			<pre><code>
				$(document).ready(function(){

				//Vis/skjul log ind boks 
					$('#loginBtn').on('click', function(){

						if( $('ul li > form').is(':visible')){

							$('ul li > form').hide(100);	

						} else{

							$('ul li > form').show(100);	
						}

					});
				});
			</code></pre>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. 
				Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.
				Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, 
				et tristique turpis ligula sit amet ligula. Integer et consequat nisl. 
				Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.
			</p>
		
			<p>
				Sed pellentesque faucibus sapien, sed pharetra magna consectetur id. 
				Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Ut condimentum scelerisque blandit. Vestibulum ex magna, hendrerit eget ligula sed, 
				pretium semper arcu. Mauris vitae arcu pretium purus elementum efficitur sed sed orci. 
				Sed at magna imperdiet, aliquet enim ac, semper elit. Nunc sit amet dui volutpat, 
				volutpat justo at, luctus metus. Duis lacus lacus, scelerisque ac dictum in, 
				suscipit a felis. Morbi non dignissim leo. Cras ac dapibus nisl. Mauris augue sapien, 
				convallis vel ligula quis, tincidunt scelerisque diam. Cras leo nulla, blandit ut ornare vitae, 
				faucibus non nunc. Fusce cursus vel magna in venenatis. Praesent finibus feugiat ante, 
				at tempor urna ultricies a.
			</p>			
		</article>
	</div>

	<div class="col-12">
		<article>
			Advertisement
		</article>
	</div>

<!-- COMMENTS START -->
	<div class="col-12">
		<article class="comments">
			<h1>Comments</h1>
			<hr>

			<!-- ENKELT KOMMENTAR START -->
			<div class="commentsAuthor">
				<a href="#"><img src="#" alt="#" /></a>
				<a href="#">Jessy92</a>
			</div>

			<div>
			<time>Posted <b>5 days ago</b></time>

				<p>Sed pellentesque faucibus sapien, sed pharetra magna consectetur id. 
				Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Ut condimentum scelerisque blandit. Vestibulum ex magna, hendrerit eget ligula sed</p>
			</div>
			<div class="clearfix"></div>
			<!-- ENKELT KOMMENTAR SLUT-->

			<!-- ENKELT KOMMENTAR START -->
			<div class="commentsAuthor">
				<a href="#"><img src="#" alt="#" /></a>
				<a href="#">Jessy92</a>
			</div>

			<div>
			<time>Posted <b>4 months ago</b></time>

				<p>Sed pellentesque faucibus sapien, sed pharetra magna consectetur id. 
				Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Ut condimentum scelerisque blandit. Vestibulum ex magna, hendrerit eget ligula sed
				Sed pellentesque faucibus sapien, sed pharetra magna consectetur id. 
				Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Ut condimentum scelerisque blandit. Vestibulum ex magna, hendrerit eget ligula sed</p>
			</div>
			<div class="clearfix"></div>
			<!-- ENKELT KOMMENTAR SLUT-->
 
			<h3>Join the conversation</h3><hr>
			<p><i>Commenting as <a href="">Anders</a></i></p>
			<form action="" method="post">
				<textarea name="kommentar"></textarea>
				<input type="submit" name="addComment" value="Add comment">
			</form>

		</article>
	</div>

<!-- COMMENTS SLUT -->
</div>


<!-- ASIDE START-->
<aside>
	<div class="col-12">	
		<section>
			<h3>Author <a href="#">Anders</a></h3>
			<img src="assets/img/profilePic.jpg" alt="#">
			<ul>
				<li><a href="">> Authors profile</a></li>
				<li><a href="">> Authors snippets</a></li>
			</ul>
			
			
		</section>
			
	</div>

	<div class="col-12">
		<section>
			<h3>Related snippets</h3>
			<ul>
				<li><a href="">> Jquery easy slide</a></li>
				<li><a href="">> slider 2.0</a></li>
				<li><a href="">> Lorem ipsum</a></li>
				<li><a href="">> Lorem ipsum33</a></li>
				<li><a href="">> Lorem ipsum55</a></li>
				<li><a href="">> Lorem ipsum322</a></li>
				<li><a href="">> Lorem ipsum5666</a></li>
				<li><a href="">> Lorem ipsum56</a></li>
			</ul>
		</section>
	</div>

		<div class="col-12">
		<section>
			<p>Advertising</p>
			<p>Advertising</p>
			<p>Advertising</p>
			<p>Advertising</p>
		
		</section>
	</div>

	<!-- ASIDE SLUT -->

	<div class="clearfix"></div>
</aside>