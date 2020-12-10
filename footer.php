<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP -->
		<section id="signup" data-type="background" data-speed="4">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<h2>Are you ready to take your coding skills to the <strong>next level?</strong></h2>
						<p><a href="#" class="btn btn-lg btn-block btn-success"> Yes, Sign Up!</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER -->
		<footer class="footer bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
					</div>
					<div class="col-sm-6">
						<ul class="list-inline">
							<li class="list-inline-item"><a style="color: #DD5638" href="/">Home</a></li>
							<li class="list-inline-item"><a style="color: #DD5638" href="blog.html">Blog</a></li>
							<li class="list-inline-item"><a style="color: #DD5638" href="resources.html">Resources</a></li>
							<li class="list-inline-item"><a style="color: #DD5638" href="contact.html">Contact</a></li>
							<li class="list-inline-item signup-link"><a class="nav-link" style="color: #DD5638" href="">Sign-Up Now!</a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<p class="pull-right">&copy; 2014 Brad Hussey</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- MODAL -->
			<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class ="modal-title" id="myModalLabel"><i class="fa fa-envelope">  Subscribe to our Mailing List</i></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					  <span class="sr-only">Close</span>
					</button>
				  </div>
				  <div class="modal-body" style="background: url('<?php bloginfo(stylesheet_directory)?>/assets/img/tile.jpg") top left repeat;">
					<p>Enter your email, as a thanks we'll give you our best selling course for free!</p>
					<form class="form-inline" role="form">
						<div class = "form-group">
							<label class="sr-only" for="subscribe-name"> Your first name</label>
							<input type="test" class="form-control" id="subscribe-name" placeholder= "Your first name">
						</div>
						<div class = "form-group">
							<label class="sr-only" for="subscribe-email"> Your email</label>
							<input type="test" class="form-control" id="subscribe-email" placeholder= "and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					<hr>
					<p>By submitting your email you consent to receiving occasional promotional material.  No spam.  You may unsubscribe at any time.</p>
				  </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				  </div>
				</div>
			  </div>
			</div> 
		</footer>
	<!-- BOOTSTRAP CORE JAVASCRIPT -->		
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script src="<?php bloginfo('template-directory');?>/assets/js/jquery-3.5.1.min.js"</script>
    	<script src="<?php bloginfo('template-directory');?>/assets/js/main.js"></script>
	<script src="<?php bloginfo('template-directory');?>/assets/js/bootstrap.min.js"></script> 
</body>
</html>
