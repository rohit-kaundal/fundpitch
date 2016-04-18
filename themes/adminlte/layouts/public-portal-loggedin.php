<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
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


<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu fixed">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="site-logo">
						
					<a href="<?= Url::to('/') ?>">
						<span class="logo-text">Private<span class="grey">Project</span></span>
					</a>
					
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<!--<li>
					<a href="userdb.html">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>-->
				<li  class="active">
					<a href="<?= Url::to('/public-portal/searchproject') ?>">
						<i class="entypo-search"></i>
						<span class="title">Projects Search</span>
					</a>
				</li>
				<li>
					<a href="<?= Url::to('/public-portal/myprojects') ?>">
						<i class="fa fa-list"></i>
						<span class="title">My Projects</span>
					</a>
				</li>
				<li>
					<a href="<?= Url::to('/public-portal/addproject') ?>">
						<i class="fa fa-pencil"></i>
						<span class="title">Submit a project</span>
					</a>
				</li>
				<li>
					<a href="<?= Url::to('/public-portal/mailbox') ?>">
						<i class="entypo-mail"></i>
						<span class="title">Message-Box</span>
						<span class="badge badge-secondary">8</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="">
						<i class="fa fa-gear"></i>
						<span class="title">Settings</span>
					</a>
					<ul>
						<li>
							<a href="<?= Url::to('/public-portal/useraccount') ?>">
								<span class="title">Account</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			
		</div>

	</div>

	 <?= $content?>
	 
	 <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>



	<script type="text/javascript">
        $(document).ready(function () {
        $('.fulltext').hide();

        $('.blog-item .readmore').click(function (event) {
            event.preventDefault();
            $(this).parent().find('.fulltext').slideToggle('slow');
            $(this).text($(this).text() == 'Read less...' ? 'Read more...' : 'Read less...');
        });
    });
    </script>

	<script> 
	$(document).ready(function(){
	    $("#test").click(function(){
	        $(".hide-div").animate({
	            height: 'toggle'
	        });
	    });
	});
	</script> 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
