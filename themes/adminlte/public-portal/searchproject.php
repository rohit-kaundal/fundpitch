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

		 	<div class="row showcase-content">
                <div class="col-md-12">
                    <div class="row search-projects">
						<div class="col-md-9 search-bar">
	                    	<div class="search-results">
	                            <b>Search results</b><span id="results">(453126)</span>
	                        </div>
							<div class="input-group">
								<input type="text" class="form-control input-lg" id="test" name="search" placeholder="Enter Location...">
								
								<div class="input-group-btn">
									<button type="submit" class="btn btn-lg btn-primary btn-icon">
										Search 
									</button>
								</div>
							</div>
							<div class="hide-div">
								<div id="filter-bg">
					          		<div class="col-md-3 filter">
		                                <select class="form-control">
		                                	<option>Sector</option>
											<option >Biotechnology</option>
											<option >Healthcare</option>
											<option >IT</option>
											<option >IT security</option>
											<option >Real Estate</option>
											<option >Electronics</option>
											<option >Hospitality</option>
											<option >Transportation</option>
											<option >Mining</option>
											<option >Education</option>
											<option >Fintech</option>
											<option >E-commerce</option>
										</select>
		                            </div>
		                            <div class="col-md-3 filter">
		                                <select class="form-control">
		                                	<option>Company Type</option>
											<option>Limited</option>
											<option>Unlimited</option>
										</select>
		                            </div>
		                            <div class="col-md-3 filter">
		                                <select class="form-control">
		                                	<option>Posted By</option>
											<option>Angel</option>
											<option>Consultant</option>
											<option>Promoter</option>
											<option>VC-firm</option>
											<option>Others</option>
										</select>
		                            </div>
	                            </div>
	                        </div>
						</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row project">
                        <div class="col-md-2">
                            <img src="https://www.facebook.com/images/fb_icon_325x325.png" style="width:75px;height:75px;">
                        </div>
                        <div class="col-md-10" style="padding: 0px;width: 738px;">
                            <div class="col-md-12 title-line">
                                <span class="company col-md-7"><a href="company-info.html" target="_blank">Fund Requirement for Equity Share</a>
                                </span>
                                <!--<span id="posted-admin">Posted by : Consultant <i class="fa fa-star"></i></span>-->
                                 <span id="timeline">Time-line : 30 days <i class="fa fa-clock-o"></i></span>
                                <span id="deadline">Time remaining : 14 days <i class="fa fa-clock-o"></i></span>
                                <!--<span class="pitch-label"><div class="label label-success">Pitch</div></span>-->
                            </div>
                            <div class="col-md-12 company-ipo">
                                <div class="col-md-6">
                                	<font color="#3D3838">Company : </font><span class="pro-comp">Megha Software Solutions Private Limited </span>
                                </div>
                                <div class="col-md-6">
                                	<font color="#3D3838">IPO : </font> <font color="#3D3838">Listed NSE : </font> Megha <font color="#3D3838">Listed BSE :</font>  Megha231 
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="col-md-6 total-interest">
                                	Project Status : <span class="green">Active</span>
                                </div>
                                <div class="col-md-6 interest">
                                	Consultant's Expression of Interest : Participant
                                </div>
                            </div>
                             
                            <div class="col-md-12">
                                <div class="col-md-6 invest-indv">
                                	<i class="fa fa-star"></i>21 Commitments by Individuals
                                </div>
                                <div class="col-md-6 invest-vc">
                                	<i class="fa fa-star"></i>123 Commitments by VC's/PE's
                                </div>
                            </div>
                            <div class="col-md-12 interests">
                                <div class="col-md-6 total-interest">
                                	<i class="fa fa-star"></i>23 Commitments by Firms
                                </div>
                                <div class="col-md-6 interest-commit">
                                	<i class="fa fa-star"></i>167 Total Commitments
                                </div>
                            </div>  
                            <!--<div class="col-md-12 interests">
                                <div class="col-md-4 total-interest">
                                	<div class="raised">Investment raised : 23 % </div>
                                	<div class="needed">Needed : 77 %</div>
                                </div>
                                <div class="col-md-4 knob-invest">
                                	<div class="circular-bar">
									  <input type="text" class="dial" data-fgColor="#e74c3c" data-width="75" data-height="75" data-linecap="round" value="23%" />
									  <div class="circular-bar-content">
									    <strong>Invested</strong>
									    <label></label>
									  </div>
									</div>
                                </div>
                            </div>-->                        
                            
                        </div>
                    </div>
                    <div class="row project">
                        <div class="col-md-2">
                            <img src="https://irfinity.files.wordpress.com/2015/10/ola_logo_green.jpg?w=700" style="width:75px;height:75px;">
                        </div>
                        <div class="col-md-10" style="padding: 0px;width: 738px;">
                            <div class="col-md-12 title-line">
                                <span class="company col-md-7"><a href="testbasic.html" target="_blank">Fund Requirement for Equity Share</a>
                                </span>
                                <span id="posted-admin">Posted by : Consultant <i class="fa fa-star"></i></span>
                                <span id="deadline">Time remaining : 14 days <i class="fa fa-clock-o"></i></span>
                                <!--<span class="pitch-label"><div class="label label-success">Pitch</div></span>-->
                            </div>
               			    <div class="col-md-12">
                                <div class="col-md-6 total-interest">
                                	Project Status : <span class="green">Active</span>
                                </div>
                                <div class="col-md-6 interest">
                                	Consultant's Expression of Interest : Participant
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="col-md-6 invest-indv">
                                	<i class="fa fa-star"></i>21 Commitments by Individuals
                                </div>
                                <div class="col-md-6 invest-vc">
                                	<i class="fa fa-star"></i>123 Commitments by VC's/PE's
                                </div>
                            </div>
                            <div class="col-md-12 interests">
                                <div class="col-md-6 total-interest">
                                	<i class="fa fa-star"></i>23 Commitments by Firms
                                </div>
                                <div class="col-md-6 interest-commit">
                                	<i class="fa fa-star"></i>167 Total Commitments
                                </div>
                            </div>  
                            <!--<div class="col-md-12 interests">
                                <div class="col-md-4 total-interest">
                                	<div class="raised">Investment raised : 23 % </div>
                                	<div class="needed">Needed : 77 %</div>
                                </div>
                                <div class="col-md-4 knob-invest">
                                	<div class="circular-bar">
									  <input type="text" class="dial" data-fgColor="#e74c3c" data-width="75" data-height="75" data-linecap="round" value="23%" />
									  <div class="circular-bar-content">
									    <strong>Invested</strong>
									    <label></label>
									  </div>
									</div>
                                </div>
                            </div>-->                         
                            
                        </div>
                    </div>
                </div>
            </div>		
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

	