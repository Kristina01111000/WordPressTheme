<?php
/**
	Template Name: Home Page
 */

get_header();
?>
		<!-- HERO ========================= -->
		<section id="hero" data-type="background" data-speed="5">
			<article>
				<div class="container clearfix">
					<div class="row">
						<div class="col-sm-5"><!-- look at bootstrap -> css -> grid to relearn how this works-->
							<img src = "<?php bloginfo('stylesheet_directory');?>/assets/img/logo-bge.png" alt = "Bootstrap to WordPress" class = "logo">
						</div>
						<div class= "col-sm-7 hero-text">
							<h1>Bootstrap to WordPress</h1>
							<p class= "lead">Earn money making your own responsive &amp; custom wordpress websites</p>
							<div id= "price-timeline">
								<div class="price active">
									<h4>Pre-Launch Price <small>Ends soon!</small></h4>
									<span>$27</span>
								</div>
								<div class="price ">
									<h4>Launch Price <small>Coming soon!</small></h4>
									<span>$28</span>
								</div>
								<div class="price ">
									<h4>Final Price <small>Coming soon!</small></h4>
									<span>$30</span>
								</div>
								<p> <a class = "btn btn-lg btn-danger" href="/" role = "button">Enroll now &raquo</a></p>
							</div>
						</div>
					</div>
				</div>
			</article>		
		</section>
		
		<!-- OPT IN SECTION -->
		<section id="optin">
			<div class = "container">
				<div class = "row">
					<div class="col-sm-8">
						<p class = "lead"><strong>Subscribe to our mailing list.</strong> We'll send something special as a thank you!</p>
					</div>
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target= "#myModal">Click here to Subscribe!</button>
					</div>
				</div>
			</div>
		</section>
		<!-- BOOST INCOME -->
		<section id="boost-income">
			<div class="container">
				<div class="section-header">
					<img src="assets/img/icon-boost.png" alt="Chart">
					<h2>How you can Boost your Income</h2>
				</div>
				<p>This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space!</p>
				<div class="row">
					<div class="col-sm-6">
						<h3>Make money on the side</h3>
						<p>This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space!</p>
					</div>
					<div class="col-sm-6">
						<h3>Create a full-time income</h3>
						<p>This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space! This is text that is going to take up some space!</p>
					</div>
				</div>
			</div>
		</section>		
		<!-- WHO BENEFITS -->
		<section id="who-benefits">
			<div class="container">
				<div class= "section-header">
					<img src="assets/img/icon-pad.png" alt="paper and pencil">
					<h2>Who should take this course</h2>
				</div>
				<div class="row">
					<div class="col-sm-8 offset-sm-2">
						<h3>Graphic & Web Designers</h3>
						<p>Graphic designers are extremely talented, but ask them to code their designs and they’ll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.
						If you’re a designer, learning to code your own WordPress websites can change your business entirely! Now, not only are you a great designer, but you’re a skillful developer, too! This puts you in a position to make an extra $1,000 – $5,000 per project.</p>
						<h3>Entrepreneurs</h3>
						<p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the cut-throat world of the Startup company, it’s a necessity to have a world-class website. However, world-class websites come with a large price tag.
						If you can learn how to build a high-quality startup website by yourself, then you’ve just saved yourself a lot of cash, tens of thousands of dollars in many cases.</p>
						<h3>Employees</h3>
						<p>Any company knows the education & training of their employees is key to a thriving team.
						Depending on the type of company you work for, if you understand how to code, and can develop CMS driven websites, that gives you negotiating power for a better position, or a higher salary.</p>
						<h3>Code Hobbyists</h3>
						<p>It’s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal of tools to play with — you can even sell WordPress themes and plugins for cash! The possibilities are truly endless.</p>
						<h3>People Looking for a New Career</h3>
						<p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work almost anywhere in the world? Becoming a Web Developer might be the answer for you.
						Web developers are paid well, anywhere from $33,000 to more than $105,000 per year. They get to work at amazing companies that are changing the world, or they enjoy the ability to start their own companies, become location-independent and work from home, from coffee shops, in an airplane, on the beach, or wherever they want!</p>
					</div>
				</div>
			</div>
		</section>
		<!-- COURSE FEATURES -->
		<section id="course-features">
			<div class="container">
				<div class="section-header">
					<img src="assets/img/icon-rocket.png" alt= "rocket">
					<h2> Course Features</h2>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<i class = "ci ci-computer"></i>
						<h4>Lifetime access</h4>
					</div>	
					<div class="col-sm-2">
						<i class = "ci ci-watch"></i>
						<h4>Video Content</h4>
					</div>	
					<div class="col-sm-2">
						<i class = "ci ci-calendar"></i>
						<h4>30 Day Guarantee</h4>
					</div>	
					<div class="col-sm-2">
						<i class = "ci ci-community"></i>
						<h4>Community access</h4>
					</div>	
					<div class="col-sm-2">
						<i class = "ci ci-instructor"></i>
						<h4>Access to Instructor</h4>
					</div>	
					<div class="col-sm-2">
						<i class = "ci ci-device"></i>
						<h4>Accessible on your phone</h4>
					</div>	
				</div>
			</div>
		</section>
		
		<!-- PROJECT FEATURES -->
		<section id="project-features">
			<div class="container">
				<h2>Final Project Features</h2>
				<p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website you are going to build? You're looking at it! The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
					<div class= "row">
						<div class= "col-sm-4">
							<img src="assets/img/icon-design.png" alt="Design">
							<h4>Sexy &amp; Modern Design</h4>
							<p>You get to work with a modern, professional quality design & layout.</p>
						</div>
						<div class= "col-sm-4">
							<img src="assets/img/icon-code.png" alt="Code">
							<h4>Quality HTML5 &amp; CSS3</h4>
							<p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.</p>
						</div>
						<div class= "col-sm-4">
							<img src="assets/img/icon-cms.png" alt="CMS">
							<h4>Easy-to-use CMS</h4>
							<p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
						</div>
					</div>
			</div>
		</section>
		<!-- VIDEO -->
		<section id="video">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2">
						<h2>Watch the Course Indroduction</h2>
						<iframe width="100%" height="415" src="https://www.youtube.com/embed/4KvXrbabutg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<!-- INSTRUCTOR -->
		<section id="instructor">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-6">
						<div class="row">
							<div class="col-lg-8">
								<h2>Your Instructor <small>Brad Hussey</small></h2>
							</div>
							<div class="col-lg-4">
								<a href="https://twitter.com" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
								<a href="https://facebook.com" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
								<a href="https://plus.google.com" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
						<p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</p>
						<p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
						<p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people.</p>
						<p>He's had the privilege of working with, and providing solutions for, numerous businesses, big & small, across the Americas.</p>
						<p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios.</p>
						<p>He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
						<hr>
						<h3>The numbers don't lie</h3>
						<div class="row">
							<div class="col-4">
								<div class="num">
									<div class="num-content">
										41,000+ <span>students<span>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="num">
									<div class="num-content">
										569 <span>reviews<span>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="num">
									<div class="num-content">
										8 <span>courses<span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- TESTIMONIALS -->
		<section id="kudos">			
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2">
						<h2>What People Are Saying About Brad</h2>
						<div class= "row testimonial">
							<div class="col-sm-4">
								<img src="assets/img/brennan.jpg" alt="Brennan">
							</div>
							<div class="col-sm-8">
								<blockquote>
									I'm baby cliche lorem tumblr, tbh vice shabby chic enamel pin polaroid mixtape meditation offal. Cliche tumeric fanny pack, prism locavore woke ullamco banh mi authentic pabst aesthetic. Freegan before they sold out narwhal enim selvage cred pinterest thundercats godard live-edge. Vape single-origin coffee 3 wolf moon deep v tilde, freegan shoreditch squid bespoke pitchfork sriracha tumblr. Twee listicle sed nulla aliquip. Subway tile 3 wolf moon art party lorem, ipsum eu church-key polaroid salvia paleo chartreuse ethical. Proident schlitz offal ullamco, yuccie hexagon godard 3 wolf moon williamsburg crucifix live-edge dolore mustache.
									Dummy text? More like dummy thicc text, amirite?
									<cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
								</blockquote>
							</div>
						</div>
						<div class= "row testimonial">
							<div class="col-sm-4">
								<img src="assets/img/ben.png" alt="Ben">
							</div>
							<div class="col-sm-8">
								<blockquote>
									I'm baby mustache incididunt ennui, kogi hot chicken anim PBR&B iPhone before they sold out cornhole coloring book laboris vice ramps. Cliche brunch viral fanny pack. Retro lyft vice +1 truffaut art party. Semiotics master cleanse anim snackwave, mollit humblebrag everyday carry prism nulla ramps organic.
									<cite>&mdash; Ben, graduate of all of Brad's courses</cite>
								</blockquote>
							</div>
						</div>
						<div class= "row testimonial">
							<div class="col-sm-4">
								<img src="assets/img/aj.png" alt="AJ">
							</div>
							<div class="col-sm-8">
								<blockquote>
								I'm baby mustache incididunt ennui, kogi hot chicken anim PBR&B iPhone before they sold out cornhole coloring book laboris vice ramps. Cliche brunch viral fanny pack. Retro lyft vice +1 truffaut art party. Semiotics master cleanse anim snackwave, mollit humblebrag everyday carry prism nulla ramps organic.
									<cite>&mdash; Aj, graduate of all of Brad's courses</cite>
								</blockquote>
							</div>
						</div>
						<div class= "row testimonial">
							<div class="col-sm-4">
								<img src="assets/img/ernest.png" alt="Ernest">
							</div>
							<div class="col-sm-8">
								<blockquote>
									I'm baby cupidatat dreamcatcher keytar fanny pack retro, everyday carry pickled duis heirloom. Dolor swag ad letterpress chillwave, cred culpa literally stumptown drinking vinegar sint pop-up. Cliche narwhal subway tile pickled. Slow-carb veniam enamel pin messenger bag intelligentsia, mollit kinfolk semiotics quis pitchfork. Anim cornhole commodo cold-pressed, kombucha est humblebrag pork belly wayfarers fam direct trade fashion axe. Brunch eu et gluten-free copper mug sed master cleanse shabby chic. Williamsburg jean shorts cornhole franzen.	
									<cite>&mdash; Ernest, graduate of all of Brad's courses</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
<?php get_footer();?>
