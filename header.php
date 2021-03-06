<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clothes_shop
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default">
		  	<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Help</a></li>
		        <li><a href="#">Contact</a></li>
		        <li><a href="#">Delivery information</a></li>
		  
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><i class="fa fa-phone"></i></li>
		        <li><a href="#">Call us : 032 2352 782</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->  
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
						<p class="logo">GRETONG</p>
						<p class="sub-logo"> ONLINE STORE </p>
				</div>
				<div class="col-md-6 sub-menu-block">
					<div class="row">
						<ul class="nav navbar-nav sub-menu">
					        <li class="login-link"><a href="#">Login</a></li>
					        <li><a href="#" class="">Register</a></li>
					     </ul>
					     <ul class="nav navbar-nav navbar-right sub-menu">
					        <li class="cart"><a href="<?php echo WC()->cart->get_cart_url(); ?>" ><i class="fa fa-shopping-cart"></i> My Cart (<?php echo WC()->cart->get_cart_contents_count(); ?>): <?php echo WC()->cart->get_cart_total(); ?></a></li>
					        <li class="checkout-link"><a href="#">CHECKOUT</a></li>
					     </ul>
					</div>


				
					<div class="row inner-addon">
				      <i class="glyphicon glyphicon-search"></i>
				      <input type="text" class="form-control" placeholder="Search" />
				    </div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-default container secondary-nav">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li ><a class="active-link" href="<?php echo get_home_url(); ?>">HOME<span class="sr-only">(current)</span></a></li>
			        <li><a href="<?php echo get_term_link( 37 ,'product_cat') ?>">NEW ARRIVALS</a></li>
			        <li><a href="<?php echo get_term_link( 38 ,'product_cat') ?>">TUXEDO</a></li>
			        <li><a href="<?php echo get_term_link( 39 ,'product_cat') ?>">SWEATER</a></li>
			        <li><a href="<?php echo get_term_link( 40 ,'product_cat') ?>">SHOES</a></li>
			        <li><a href="<?php echo get_term_link( 41 ,'product_cat') ?>">GLASSES</a></li>
			        <li><a href="<?php echo get_term_link( 42 ,'product_cat') ?>">T-SHIRT</a></li>
			        <li><a href="<?php echo get_term_link( 43 ,'product_cat') ?>">WATCHES</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
