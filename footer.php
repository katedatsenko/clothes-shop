<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clothes_shop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav class="navbar navbar-default">
		  	<div class="container-fluid footer-first ">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-footer">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <div class="container">
		    	<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav social">
					    <li>FOLLOW US ON</li>
					    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
					    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
					 	<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				    </ul>
			    <div class="nav navbar-nav navbar-right">
			    	<input type="email" class="email-footer" placeholder="Enter your email to join our newsletter" />
			    	<button class="email-button">JOIN</button>
			    </div >
			      
			    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container -->  
			</div>

			<div class="container footer-second">
				<div>
					<p class="footer-head">CUSTOMER CARE</p>
					<ul>
						<li><a href="">Help Center</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">How To Buy</a></li>
						<li><a href="">Delivery</a></li>   
					</ul>
				</div>
				<div>
					<p class="footer-head">ABOUT US</p>
					<ul>
						<li><a href="">Our Stories</a></li>
						<li><a href="">Press</a></li>
						<li><a href="">Career</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div>
					<p class="footer-head">MY ACCOUNT</p>
					<ul>
						<li><a href="">Login</a></li>
						<li><a href="">My Cart</a></li>
						<li><a href="">Order</a></li>
						<li><a href="">History Payment</a></li>   
					</ul>
				</div>
				<div>
					<p class="footer-head last-head">our stores</p>
					<button>BOGOR</button>
					<button class="first-button">SOLO</button>
					<ul>
						<li><p><i class="fa fa-map-marker"></i> Jl. Haji Muhidin, Blok G no.69</p></li>
						<li><p><i class="fa fa-phone"></i> 025-2839341</p></li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:solo@gretong.com">solo@gretong.com</a></li>
                     
					</ul>
				</div>
			</div>
			<div class="container footer-third">
				<p>© 2015 Gretongan</p>
				<p><a href="#">Terms & Condition</a></p>
				<p><a href="#">Privacy Policy</a></p>
			</div>
		</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
