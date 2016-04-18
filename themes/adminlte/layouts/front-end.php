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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">

	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">
	<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<style type="text/css">
		.login-container {
		  background-color: white;
		}

		.site-header .site-nav .main-menu li a:hover {
		  color: grey !important;
		}
	</style>
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">
    <?php $this->beginBody() ?>
    <script type="text/javascript">
    var baseurl = '';
    </script>
    <script type="text/javascript">
	      $('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
<div class="login-container">
	<div class="site-header-container container">

		<div class="row">
		
			<div class="col-md-12">
				
				<header class="site-header">
				
					<section class="site-logo">
					
						<a href="<?= Yii::$app->request->baseUrl?>">
							Private Project
						</a>
						
					</section>
					
					<nav class="site-nav">
					
							<ul class="main-menu hidden-xs" id="main-menu">
								<li class="active">
									<a href="<?= Yii::$app->request->baseUrl?>">
										<span>Home</span>
									</a>
								</li>
								<li>
									<a href="<?= Yii::$app->request->baseUrl?>/site/about">
										<span>Pages</span>
									</a>
									
									<ul>
										<li>
											<a href="<?= Yii::$app->request->baseUrl?>/site/about">
												<span>About Us</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Documentation.html</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Portfolio Item</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<span>Blog</span>
									</a>
								</li>
								<li>
									<a href="<?= Yii::$app->request->baseUrl?>/site/contact">
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
						<a href="<?= Yii::$app->request->baseUrl?>/site/login" class="btn btn-secondary">Log in</a>
					</div>
					
				</header>
				
			</div>
			
		</div>
		
	
		
	</div>
	
<?= $content ?>



<!-- Site Footer -->
<footer class="site-footer">

	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-6">
				Copyright &copy; Private Project - All Rights Reserved. 
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
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>




    
    
    
    
    
    