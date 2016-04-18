<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use Yii;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">


	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">
	<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.site-header .site-nav .main-menu > li > a {
			border: 0;
			background: none !important;
			color: white;
		}
	</style>


</head>

<body class="page-body" data-url="http://neon.dev">
<?php $this->beginBody() ?>
	<div class="text-on-video">
			<div class="hero-container">
				<h1 class="hero-title">Explore. Meet. Invest.</h1>
				<h2 class="hero-subtitle"> Get actionable data that lets you pinpoint the companies and people you need to know or do business with. </h2>

				<p class="button hero-button" data-toggle="modal" data-target="#request-modal">Request for Access</p>
				
			</div>
		</div>

<div class="page-container">

	<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	<div class="wrap">	
		<div class="site-header-container container">

			<div class="row">
			
				<div class="col-md-12">

					
					<header class="site-header">
					
						<section class="site-logo">
						
							<a href="">
								<span class="logo-text1">
								<span class="logo-text">Private<span class="blue">Project</span></span>
								</span>
							</a>
							
						</section>
						
						<nav class="site-nav">
					
							<ul class="main-menu hidden-xs" id="main-menu">
								<li class="active">
									<a href="index.html">
										<span>Home</span>
									</a>
								</li>
								<li>
									<a href="about.html">
										<span>Pages</span>
									</a>
									
									<ul>
										<li>
											<a href="about.html">
												<span>About Us</span>
											</a>
										</li>
										<li>
											<a href="blog-post.html">
												<span>Documentation.html</span>
											</a>
										</li>
										<li>
											<a href="portfolio-single.html">
												<span>Portfolio Item</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="blog.html">
										<span>Blog</span>
									</a>
								</li>
								<li>
									<a href="contact.html">
										<span>Contact</span>
									</a>
								</li>
							</ul>
							
						
							<div class="visible-xs">
								
								<a href="#" class="menu-trigger">
									<i class="entypo-menu"></i>
								</a>
								
							</div>
						</nav>

						<div class="callout-button login">
							<a href="../../html/neon/extra-login.html" class="btn btn-secondary">Log in</a>
						</div>
						
					</header>


					
					
				</div>
				
			</div>
			
		</div>	


    <?= $content?>
    
    
    
		<!-- Site Footer -->
		<footer class="site-footer">

			<div class="container">
			
				<div class="row">
					
					<div class="col-sm-6">
						Copyright &copy; Neon - All Rights Reserved. 
					</div>
					
					<div class="col-sm-6">
						
						<ul class="social-networks text-right">
							<li>
								<a href="#">
									<i class="entypo-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-facebook"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
		</footer>	


		 <div class="modal fade" id="request-modal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
			    <div class="modal-content">
			        <div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-6 info">
			        			<h3>Request for access</h3>
									<p>Finding reliable investors is hard. FundPitch makes it easier.</p>

									<p>We'll show you:</p>

									<ul>
										<li>
											Ways to source opportunities for business and strategic development
										</li>
										<li>
											Enterprise-only perks & features
										</li>
										<li>
											Our data collection and quality assurance methodology
										</li>
									</ul>
									
									
			        		</div>
			        		<div class="col-md-6 request-info">
			        			<h3 style="margin-bottom:35px;">Thank you for your interest</h3>
			        			<h4 style="margin-bottom:20px;">Enter your Official Email ID and we'll contact you shortly</h4>

			        			<p>*If you dont have a official mail ID, please feel free to contact us at support@equippp.com*</p>

			        			<div class="input-group col-md-12 signup">
									<input type="text" class="form-control">
								</div>

								<div class="buttons-RC">
									<button class="btn btn-secondary" id="success-btn" type="submit" data-dismiss="modal">Request</button>
						            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					            </div>
			        		</div>
			        	</div>
			        </div>
			    </div>
		      
		    </div>
	    </div>


	</div>

	
	
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
