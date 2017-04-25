<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clothes_shop
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-6 block-first">
					<div class="image-under-div image-under-div-1">
						<p class="first-heading first-heading-longer">NEW ARRIVALS</p>
						<p class="second-heading">REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
						<p class="button-in-border"><a href="#" >TAKE A LOOK</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture1.png" style="position: relative; z-index: 1;">
				</div>
				<div class="col-md-6 block-second">
					<div class="image-under-div image-under-div-2">
						<p class="first-heading first-heading-longer">TUXEDO</p>
						<p class="second-heading">REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
						<p class="button-in-border"><a href="#" >SHOP NOW</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture2.png">
				</div>
			</div>
			<div class="row">
				<div class="block-third">
					<div class="image-under-div image-under-div-3">
						<p class="first-heading first-heading-shorter">NEW ARRIVALS</p>
						<p class="second-heading">REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
						<p class="button-in-border"><a href="#" >SHOP NOW</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture3.png">
				</div>
				<div class="block-fourth">
					<div class="image-under-div image-under-div-4">
						<p class="another-heading">Trekking Shoes</p>
						<p class="button-arrow"><a href="#" >&rarr;</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture4.png">
				</div>
			</div>
			<div class="row">
				<div class="block-fifth">
					<div class="image-under-div image-under-div-5">
						<p class="another-heading">Casual Glasses</p>
						<p class="button-arrow"><a href="#" >&rarr;</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture5.png">
				</div>
				<div class="block-sixth">
					<div class="image-under-div image-under-div-6">
						<p class="first-heading first-heading-shorter">FRESH LOOK T-SHIRT</p>
						<p class="button-in-border"><a href="#" >SHOP NOW</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture6.png">
				</div>
				<div class="block-seventh">
					<div class="image-under-div image-under-div-7">
						<p class="another-heading">Elegant Watches</p>
						<p class="button-arrow"><a href="#" >&rarr;</a></p>
					</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture7.png">
				</div>
			</div>
		</div>
		<div class="row offers">
			<div class="special-offers-block">
				<p class="special-offers">Special Offers</p>
			</div>
		</div>
		<div class="container container-offers">
			<div class="col-md-3">
				<div class="item-offer">
					<a href="#">
					<div class="filling"></div>
					<div class="view-text">VIEW</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture8.png">
					<div class="description">
						<p class="header-offer-item">Lorem ipsum dolor</p>
						<p class="price-offer-item">ONLY $40.00</p>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="item-offer">
					<a href="#">
					<div class="filling"></div>
					<div class="view-text">VIEW</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture9.png">
					<div class="description">
						<p class="header-offer-item">Consectetur adipis</p>
						<p class="price-offer-item">ONLY $60.00</p>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="item-offer">
					<a href="#">
					<div class="filling"></div>
					<div class="view-text">VIEW</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture10.png">
					<div class="description">
						<p class="header-offer-item">Commodo consequat</p>
						<p class="price-offer-item">ONLY $14.20</p>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="item-offer">
					<a href="#">
					<div class="filling"></div>
					<div class="view-text">VIEW</div>
					<img src="<?php echo get_template_directory_uri()?>/images/picture11.png">
					<div class="description">
						<p class="header-offer-item">Voluptate velit</p>
						<p class="price-offer-item">ONLY $37.00</p>
					</div>
				</a>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
