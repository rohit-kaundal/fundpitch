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

</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
<?php $this->beginBody() ?>
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    <div class="sidebar-menu fixed">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="<?= Yii::$app->request->baseUrl ?>/">
						Private Project
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
				<li class="active">
					<a href="<?= Yii::$app->request->baseUrl ?>/">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/users">
						<i class="fa fa-users"></i>
						<span class="title">Users</span>
					</a>
				</li>
				<li>
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/project">
						<i class="fa fa-list"></i>
						<span class="title">Projects</span>
					</a>
				</li>
				<li>
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/project/new">
						<i class="fa fa-pencil"></i>
						<span class="title">Submit a project</span>
					</a>
				</li>
				<li>
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/message">
						<i class="entypo-mail"></i>
						<span class="title">Message-Box</span>
						<span class="badge badge-secondary">8</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/ui-elements">
						<i class="entypo-newspaper"></i>
						<span class="title">UI Elements</span>
					</a>
					<ul>
						<li>
							<a href="<?= Yii::$app->request->baseUrl ?>/admin/ui-elements/settings">
								<i class="entypo-inbox"></i>
								<span class="title">Add New</span>
							</a>
						</li>
						<li>
							<a href="<?= Yii::$app->request->baseUrl ?>/admin/ui-elements/changelogo">
								<i class="entypo-pencil"></i>
								<span class="title">Change logo</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?= Yii::$app->request->baseUrl ?>/admin/user/settings">
						<i class="fa fa-gear"></i>
						<span class="title">Account Settings</span>
					</a>
				</li>
			</ul>
			
		</div>

	</div>
	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
							John Henderson
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="user-account.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="message-box.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">6</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
										<a href="#">
											<i class="entypo-user-add pull-right"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="unread notification-secondary">
										<a href="#">
											<i class="entypo-heart pull-right"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="entypo-user pull-right"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="entypo-cancel-circled pull-right"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="entypo-info pull-right"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="entypo-rss pull-right"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="all-notifications.html">View all notifications</a>
							</li>
						</ul>
		
					</li>
		
					<!-- Message Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<span class="badge badge-secondary">10</span>
						</a>
		
						<ul class="dropdown-menu">
							<li>
								<form class="top-dropdown-search">
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search anything..." name="s" />
									</div>
									
								</form>
								
								<ul class="dropdown-menu-list scroller">
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Luc Chartier</strong>
												- yesterday
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Salma Nyberg</strong>
												- 2 days ago
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												Hayden Cartwright
												- a week ago
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												Sandra Eberhardt
												- 16 days ago
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="message-box-admin.html">All Messages</a>
							</li>
						</ul>
		
					</li>
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					
		
					<li class="sep"></li>
		
					<li>
						<a href="<?= Yii::$app->request->baseUrl ?>/admin/site/logout">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>

		
		<hr />
		
		<?= $content?>
		
		<br />
		
		
		<br />
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

	
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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	
	


	<!-- Demo Settings -->
	

	

	<script type="text/javascript">
		$('.ban-button').on("click",function(){  
	  //$('button').not(this).removeClass();
	  $(this).toggleClass('active');
	  
	  });
	</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
