<!DOCTYPE html>
<html><head>
	<link rel= "stylesheet" href= "css/stylesheet.css" />
	<link rel= "stylesheet" href= "css/normalize.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>
</head><body>
<?php require('../wordpress-3.9/wordpress/wp-blog-header.php'); ?>
<!-- HERO -->
	<section class= "hero">
		<header class= "menu-navigation">
			<a href= "#" id= "mobile-icon-button">
					<ul class= "mobile-menu-navigation" id= "mobile-icon-button">
						<li>
							<div class= "mobile-icon-container">
								<div class= "mobile-icon-line"></div>
								<div class= "mobile-icon-line"></div>
								<div class= "mobile-icon-line"></div>
							</div>
						</li>
					</ul>
				</a>
				
				<a href= "index.html"><figure class= "logo"> </figure></a>
				
			<ul class= "other-menu">

				<li><a href= "client-login.html" class= "common-navigation"> Client Login </a> </li>

				<li><a href= "#" class= "common-navigation"> Jobs |</a> </li>
			</ul>
			<ul class= "main-menu">
				<li><a href= "index.html" class= "about-navigation common-navigation"> Home </a> </li>
				
				<li><a href= "about.html" class= "about-navigation common-navigation"> About </a> </li>
				
				<li><a href= "business-solution.html" class= "product-navigation common-navigation"> Product </a> </li>
				
				<li><a href= "contact.html" class= "contact-navigation common-navigation"> Contact </a> </li>
				
				<li><a href= "news.html" class= "common-navigation"> News </a> </li>
			</ul>

		</header>
		<section class= "mobile-sidebar-container">
					<ul>
						<a href= "#about-section" class= "about-navigation common-navigation"><li> <figure class= "common-mobile-icon about-icon"></figure>About</li></a>
						<a href= "#product-section" class= "product-navigation common-navigation"><li> <figure class= "common-mobile-icon about-icon"></figure>Business Solution</li></a>
						<a href= "#contact-section" class= "contact-navigation common-navigation"> <li> <figure class= "common-mobile-icon about-icon"></figure>Contact </li></a>
						<a href= "news.html" class= "common-navigation"><li> <figure class= "common-mobile-icon about-icon"></figure> News  </li></a>
						<a href= "news.html" class= "common-navigation"><li><figure class= "common-mobile-icon about-icon"></figure> Jobs </li></a>
						<a href= "news.html" class= "common-navigation"><li><figure class= "common-mobile-icon about-icon"></figure> Client</li></a>
					</ul>
			</section>
	<!--
		<section class= "hero-container">
		
		<p class= "hero-description"> <mark class= "quote">"</mark>
			We simplify <mark class= "highlight-underline">Software Solution</mark>.<mark class= "quote">"</mark>
		</p>	
			<section class= "hero-title"> - Lee System Technology Ventures </section>
		
		</section>
			<figure class= "icon-down"></figure>
	<!--end HERO-->
	</section><br/><br/><br/><br/><br/>



	<!--NEWS-->
			<section class= "news-section">
				<section class= "news-container">
				<section class= "news title"> <h1> News </h1> </section>
				<nav class= "news-navigation-container">
					<ul>
						<li class= "active-menu"> Recent </li>
						<li> Trending </li>
					</ul>
				</nav>
<?php
	global $post;
	$args = array( 'posts_per_page' => 10 );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post);
?>
			<!--NEWS 1-->
					<section class= "news-wrap">
						<figure class= "news-image"> </figure>
						<section class= "news-description">
							<h3> <a class= "read-more-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>  </h3>
							<section class= "news-social-media">
								<ul>
									<li><strong>4/4/2014</strong></li>
									<li>| 5 mins read</li>
									<li><figure class= "fb-share-icon"></figure>	</li>
									<li><figure class= "twitter-share-icon"></figure></li>
								</ul>
							</section>
							<p> <a class= "read-more-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a> 
							</p>
						</section>
					</section>
				<!--end NEWS 1-->
<?php endforeach; ?>				
				</section>

			</section>
		<!--end NEWS-->

<!-- FOOTER -->
	<section class= "footer-section">
		<p class= "footer-contact">
			Copyright 2014. LST Ventures Technology. All Rights Reserved. <a href="#">[ Privacy Policy ] [ Terms and Conditions ]</a>
		</p>
	</section>
<!--end FOOTER-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src= "js/main.js"></script>
</body>
</html>