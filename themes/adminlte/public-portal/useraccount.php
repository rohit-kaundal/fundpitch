<?php
/* @var $this yii\web\View */
?>


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
								<a href="message-box.html">All Messages</a>
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
						<a href="extra-login.html">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>

		
		<hr />

		<div class="alert-message-success">
			<div class="alert alert-success">Your changes have been successfully updated.</div>
		</div>

		<div class="userdb">

            <div class="display-content-account">
                      <div class="row">
                        <div class="col-md-9 col-md-offset-1">
                          <div class="pass">
                            <div class="row">
                              <label class="col-md-5 control-label">Your Current Password</label>
                              <div class="col-md-5">
                                <div class="input-group">
	                                <input type="password" class="form-control" placeholder="Password">
	                                <span class="input-group-addon">
	                                	<i class="fa fa-lock"></i>
	                                </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pass1">
                            <div class="row">
                              <label class="col-md-5 control-label">Enter New Password</label>
                              <div class="col-md-5">
                                <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                                </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pass2">
                            <div class="row">
                              <label class="col-md-5 control-label">Confirm Password</label>
                              <div class="col-md-5">
                                <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                                </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="noti">
                            <div class="row">
                                <div class="form-group">
                                 <label class="col-md-5 control-label">
                                    Send notifications to my mail</label>
                                  <div class="col-md-4">
                                   <input type="checkbox" name="vehicle" value="Bike"> Yes
                                  </div>
                                </div>
                            </div>
                          </div>
                        <!--  <div class="pri">
                            <div class="row">
                              <div class="form-group">
                                <label class="col-md-5 control-label">Primary Email Address
                                  </label>
                                    <div class="col-md-6">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email Address">
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                          <div class="sec">
                            <div class="row">
                              <div class="form-group">
                                    <label class="col-md-5 control-label">Secondary Email Address
                                    </label>
                                    <div class="col-md-6">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email Address">
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div> -->
                          <div class="sub">              
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          </div><!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                      </div>
            </div>

        </div>




		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

		
