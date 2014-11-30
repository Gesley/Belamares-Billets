<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<html lang="br">

<!-- Mirrored from pixelgeeklab.com/html/realestast/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Oct 2014 23:08:54 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealEstast - HTML5 Template</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libs CSS -->
	<link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/chosen/chosen.css" media="screen">

	<!-- Theme -->
	<link href="css/theme-animate.css" rel="stylesheet">
	<link href="css/theme-elements.css" rel="stylesheet">
	<link href="css/theme-blog.css" rel="stylesheet">
	<link href="css/theme-map.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	
	<!-- Style Switcher-->
	<link rel="stylesheet" href="style-switcher/css/style-switcher.css">
	<link href="css/colors/red/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="css/theme-responsive.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888</p>
					<ul class="nav nav-pills nav-top navbar-right">
						<li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="index-2.html"><img src="images/logo.png" alt="Flatize"></a> </div>
					
					<div class="navbar-collapse collapse width">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown active"><a href="index-2.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index-map.html">Home Map</a></li>
									<li class="active"><a href="index-2.html">Home Slider</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
								<ul class="dropdown-menu">
									<li class="dropdown"><a href="grid-fullwidth-3-column.html" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Grid full width 3 column</a>
										<ul class="dropdown-menu">
											<li class="dropdown"><a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="grid-fullwidth-3-column.html">Submenu level 2</a>
												<ul class="dropdown-menu">
													<li><a href="grid-fullwidth-3-column.html">Submenu level 3</a></li>
													<li><a href="grid-fullwidth-3-column.html">Submenu level 3</a></li>
													<li><a href="grid-fullwidth-3-column.html">Submenu level 3</a></li>
												</ul>
											</li>
											<li><a href="grid-fullwidth-3-column.html">Submenu level 2</a></li>
											<li><a href="grid-fullwidth-3-column.html">Submenu level 2</a></li>
										</ul>
									</li>
									<li><a href="grid-fullwidth-4-column.html">Grid full width 4 column</a></li>
									<li><a href="grid-sidebar.html">Grid with sidebar</a></li>
									<li><a href="list-fullwidth.html">List rows</a></li>
									<li><a href="list-map.html">List map</a></li>
									<li><a href="property-detail.html">Property Detail</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Agents</a>
								<ul class="dropdown-menu">
									<li><a href="ouragents.html">Our Agents</a></li>
									<li><a href="agentprofile.html">Agent Profile</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="faq-sidebar.html">FAQs</a></li>
									<li><a href="page-404.html">404-page</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
								<ul class="dropdown-menu">
									<li><a href="blog.html">Blog Large With Sidebar</a></li>
									<li><a href="blog-2-cols.html">Blog 2 Columns</a></li>
									<li><a href="blog-2-cols-sidebar.html">Blog 2 Columns With Sidebar</a></li>
									<li><a href="blog-single.html">Article detail</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
		
		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-slide" class="owl-carousel pgl-main-slide" data-plugin-options='{"autoPlay": true}'>
					<div class="item" id="item1"><img src="images/slides/slider1.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="images/slides/slider2.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Presidential Parcel Frames Command Views of Mt. Rushmore</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="images/slides/slider3.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Alpine Rd, Stockton, CA 95215</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
		<footer class="pgl-footer">
			<div class="container">
				<div class="pgl-upper-foot">
					<div class="row">
						<div class="col-sm-4">
							<h2>Contact detail</h2>
							<p>Pellentesque nec erat. Aenean semper, neque non faucis. Malesuada, dui felis tempor felis, vel varius ante diam ut mauris.</p>
							<address>
								<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
								<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
								<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
								<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:pixelgeklab@gmail.com">Pixelgeklab@gmail.com</a>
							</address>
						</div>
						<div class="col-sm-2">
							<h2>Useful links</h2>
							<ul class="list-unstyled">
								<li><a href="#">Help and FAQs</a></li>
								<li><a href="#">Home Price</a></li>
								<li><a href="#">Market View</a></li>
								<li><a href="#">Free Credit Report</a></li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Community Guidelines</a></li>
							</ul>
						</div>
						<div class="col-sm-2">
							<h2>Pages</h2>
							<ul class="list-unstyled">
								<li><a href="#">Font &amp; Color</a></li>
								<li><a href="#">Blogs</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">404 Page</a></li>
								<li><a href="#">Advanced Search</a></li>
								<li><a href="#">Property Custom Field</a></li>
								<li><a href="#">Google Map</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h2>Don’t miss out</h2>
							<p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut scelerisque condimentum, quam odio ultrices leo.</p>
							<form class="form-inline pgl-form-newsletter" role="form">
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email here">
								</div>
								<button type="submit" class="btn btn-submit"><i class="icons icon-submit"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="pgl-copyrights">
					<p>Copyright © 2014 RealEstast. Designed by <a href="http://pixelgeeklab.com/">PixelGeekLab</a></p>
				</div>
			</div>
		</footer>
		<!-- End footer -->
			
	</div>
	
	<!-- Begin Style Switcher -->
	<div id="style-switcher">
		<div id="toggle_button"> <a href="#"><i class="fa fa-pencil"></i></a> </div>
		<div id="style-switcher-menu">
			<h4 class="text-center">Style Switcher</h4>
			<div class="segment">
				<ul class="theme cookie_layout_style level-0" id="bd_value">
					<li> <a style="background: #36c" title="colors/blue/style" href="#"></a> </li>
					<li> <a style="background: #8a745f" title="colors/brown/style" href="#"></a> </li>
					<li> <a style="background: #8bc473" title="colors/green/style" href="#"></a> </li>
					<li> <a style="background: #f9b256" title="colors/orange/style" href="#"></a> </li>
					<li> <a style="background: #4dbfd9" title="colors/cyan/style" href="#"></a> </li>
					<li> <a style="background: #c578c8" title="colors/violet/style" href="#"></a> </li>
				</ul>
			</div>
			<div class="segment">
				<div id="reset"> <a href="#" class="btn btn-sm reset">Reset</a> </div>
			</div>
		</div>
	</div>
	<!-- Begin Style Switcher -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="vendor/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="vendor/gmap/gmap3.min.js"></script>
	<script src="vendor/gmap/gmap3.infobox.min.js"></script>
	<script src="vendor/gmap/gmap.js"></script>
	
	<!-- Theme Initializer -->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>
	
	<!-- Style Switcher -->
	<script type="text/javascript" src="style-switcher/js/switcher.js"></script>
</body>

<!-- Mirrored from pixelgeeklab.com/html/realestast/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Oct 2014 23:09:57 GMT -->
</html>