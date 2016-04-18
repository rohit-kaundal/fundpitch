<?php
/* @var $this yii\web\View */
?>
	<style type="text/css">
		::-webkit-scrollbar {
		    background: transparent;
		    width: 8px;
		}
		::-webkit-scrollbar-thumb{
		    background-color: rgba(0, 0, 0, 0.2);
		    border-radius: 4px;
		}
		::-webkit-scrollbar-thumb:hover {
		    background-color: rgba(0, 0, 0, 0.3);
		    border-radius: 4px;
		}

		.row.data{
			margin-bottom: 30px;
		}

		.fixedheader .col-md-6 .col-md-3 {
		  padding-left: 0px 15px !important;
		}
		.fixedheader{
			font-size: 13px;
		}

	</style>

<div class="main-content">
		<a href="#" class="sticky-share button" data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i>Share Project</a>
				
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



		<div><hr></div>

		<div class="alert-message">
			<div class="alert alert-info"><strong>Heads up!</strong> Please, click on the edit links to update your project details.</div>
		</div>

		<div class="alert-message">
			<div class="alert alert-success">Your report has been successfully submitted.</div>
		</div>


		<div class="alert-message-success">
			<div class="alert alert-success">Thanks for your Interest in the project.</div>
		</div>

		<div class="project-title-share-timeline">
			<span class="col-md-5 project-title"><h3>Fund Requirement for Equity Share</h3></span>
		    <span class="col-md-3" id="deadline-comp">Time remaining : 14 days <i class="fa fa-clock-o"></i></span>
		    <span class="col-md-2" id="postedby-admin">Posted by : Admin <i class="fa fa-star"></i></span>
		    <div class="col-md-2 seperator">
	            <div class="share-button">
	                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">PITCH</button><br>
	            </div>
	        </div>
		</div>
		
		
		
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11 company-data">
                       <div class="row data">
                            <div class="fixedheader">
                                <div class="col-md-2 company-logo">
                                    <img src="https://www.facebook.com/images/fb_icon_325x325.png" style="width:95px;height:95px;padding: 5px;">
                                </div>
                                <div class="col-md-10">
                                	<div class="row" style="display:flex;">
	                                	<div class="col-md-12 project-title">

		                            		<span><h3>Megha Software Solutions Private Limited Association</h3></span> 
	                                	</div> 

		                                 	<span class="basic-edit">
				                            	<a href="basicinfo-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
				                            </span> 
                                	</div>
                                	<div class="row">
				                            <div class="col-md-12 data11">
			                                    <div class="row company-info">
			                                    	<div class="col-md-6">
				                                        <div class="col-md-4" style="padding-left: 0px;width: 101px;padding-right:0px;">
				                                            <span class="black">Head-Quarters :</span>
				                                        </div>
				                                        <div class="col-md-8" style="padding-left: 0px;">
				                                           Banjara Hills, Hyderabad
				                                        </div>
			                                        </div>
			                                        <div class="col-md-6">
					                                        <div class="col-md-3">
					                                            <span class="black">Founders :</span>
					                                        </div>
					                                        <div class="col-md-9" style="padding-left: 0px;">
					                                           Vishal Sikka, Satyanarayana, Harsha
					                                        </div>
			                                        </div>
			                                    </div>

			                                    <div class="row company-info">
			                                    	<div class="col-md-6">
						                               		<div class="col-md-3">
						                                    	 <span class="black">Founded :</span>
							                                </div>
							                                <div class="col-md-8">
							                                    2014
							                                </div>
			                                        </div>
			                                        <div class="col-md-6">
						                               		<div class="col-md-3">
						                                    	<span class="black">Employees :</span>
							                                </div>
							                                <div class="col-md-8" style="padding-left: 0px;">
							                                   14
							                                </div>
			                                        </div>
			                                    </div>

			                                    <div class="row company-info">
			                                    	<div class="col-md-6">
					                                        <div class="col-md-3">
					                                            <span class="black">Sector :</span>
					                                        </div>
					                                        <div class="col-md-8">
					                                           Search, Email, Information Technology, Software, Web
					                                        </div>
			                                        </div>
			                                        <div class="col-md-6">
						                                        <div class="col-md-3">
						                                            <span class="black">Website :</span>
						                                        </div>
						                                        <div class="col-md-8" style="padding-left: 0px;">
						                                        	equivas.com
						                                        </div>
			                                        </div>
			                                    </div>

			                                    <div class="row company-info">
			                                    	<div class="col-md-6">
			                                    		<div class="col-md-7" style="padding-left:0px;padding-right:0px;">
					                                         <span class="black">Estimated turn over for next year :</span>
					                                    </div>
					                                    <div class="col-md-5" style="padding-left:0px;">
					                                         2 crs
					                                    </div>
			                                        </div>
			                                        <div class="col-md-6">
						                                    <div class="col-md-6" style="padding-left:0px;">
						                                         <span class="black">Turn over for current year :</span>
						                                    </div>
						                                    <div class="col-md-6" style="padding-left:0px;">
						                                        80 lacs
						                                    </div>
			                                        </div>
			                                    </div>
				                            </div>
			                        </div>
			                        <div class="row about-company">
	                            		 <div class="blog-item">
			                                <p>Flipkart is an e-commerce company founded in 2007 by Sachin Bansal and Binny Bansal. The company is registered in Singapore, but has its headquarters in Bangalore, Karnataka. </p>
			                                <p class='fulltext'> In May 2014, Flipkart received $210 million from DST Global, in July 2014 it raised $1 billion led by existing investors Tiger Global and South Africa's media group Naspers and in May 2015 it raised $550 million from some of its existing investors. Flipkart's last fundraising round in May 2015 had pegged its valuation at $15 billion.</p>
			                                <a class="readmore" href="#">Read more...</a>
			                            </div>
			                        </div>
		                        </div>
	                        </div>
                       </div>

                       <div class="row peers">
                          <div class="heading">
                            Peer Comparision
                            <span class="pull-right">
                            	<a href="peers-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
                            </span>
                          </div>
							<table class="table table-bordered">
								<thead>
									<tr class="table-heads">
										<th class="peer0"></th>
										<th class="peer1">Equivas</th>
										<th class="peer2">TCS</th>
										<th class="peer3">Infosys</th>
										<th class="peer4">Cognizant</th>
									</tr>
								</thead>
								<tbody>

									<tr class="blur-grey">
										<td><b>Company</b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Services</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Number of Employees</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Merge or Acquisitions</td>
										<td><div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Click to view the details!"><a href=""  data-toggle="modal" data-target="#merge-details">Merge & <div><a href=""  data-toggle="modal" data-target="#acqui-details">Acquired</a><div></a><div></td>
										<td><div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Click to view the details!"><a href=""  data-toggle="modal" data-target="#acqui-details">Acquired</a><div></td>
										<td><div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Click to view the details!">Acquired<div></td>
										<td><div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Click to view the details!">Acquired<div></td>
									</tr>

									<tr class="blur-grey">
										<td><b>Financials</b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Revenue</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Sales</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>PPT</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>PAT</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Networth</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Debt</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Investment till date</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Asserts</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr class="blur-grey">
										<td><b>Ownership</b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td><b>Promoter & Promoter Group</b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Indian</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Foreign</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td><b>Public</b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Institution</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>FII</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>DII</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Non Institution</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td>Bodies Corporate</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
							</tbody>
							</table>
				
                       </div>  

                       <div class="row data11-top">
                          <div class="heading">
                            Board Members and Advisors
                            <span class="pull-right">
                            	<a href="people-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
                            </span>
                          </div>
                            <ul class="pastteam">
                             <li>
                                <span><img src="http://blogsbuzzer.com/wp-content/uploads/2014/09/darshan-raval-indias-raw-star-contestant-wiki-details-profile.jpg" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Avinash</h4>
                                    <h5>Director</h5>
                                </div>
                             </li>
                             <li>
                                <span><img src="https://urbanasian.files.wordpress.com/2013/04/aa-upload1.jpg" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Avinash</h4>
                                    <h5>Director</h5>
                                </div>
                              </li>
                              <li>
                                <span><img src="https://www.morganstanley.com/assets/images/people/tiles/michael-wilson.jpg" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Harsha</h4>
                                    <h5>CEO & Director</h5>
                                </div>
                             </li>
                            </ul>
                            <ul class="pastteam">
                             <li>
                                <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Nemer_Saade_Profile_Picture.jpg/784px-Nemer_Saade_Profile_Picture.jpg" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Avinash</h4>
                                    <h5>Co-founder@ Equivas Incubation lab</h5>
                                </div>
                             </li>
                              <li>
                                <span><img src="http://www.naomilloyd.co.uk/v/ui/9117/p9041202_dww12.1.jpg?1320923983" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Harsha</h4>
                                    <h5>Product Guy@ Equivas Incubation lab</h5>
                                </div>
                             </li>
                             <li>
                                <span><img src="https://neilwhitesell.files.wordpress.com/2012/09/neil_whitesell.jpg" style="width:70px;height:70px;"></span>
                                <div class="partner-info">
                                    <h4>Avinash</h4>
                                    <h5>Director</h5>
                                </div>
                             </li>
                            </ul>
                            <div class="style" style="margin-top:20px;"><hr></div>
                            <center style="margin-bottom:10px;"><a href="people-see-all.html">See All</a></center>
                       </div>  

                       <div id="time">
	                       <div class="row">
	                            <div id="heading-recent">
	                                    Recent Timeline Activity :

		                            <span class="pull-right">
		                            	<a href="recent-activity-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
		                            </span>
	                            </div>
	                       </div>

	                       <div class="row data3-top">
	                           
	                           <ol id="timeline">

	                              <li>
	                                <time datetime="1990-07-04">July 1990</time>
	                                <p> OptionRally to Release Its Annual Tech Stock Sector Analysis</p>
	                              </li>

	                              <li>
	                                <time>September 1994</time>
	                                <p> OptionRally to Release Its Annual Tech Stock Sector Analysis</p>
	                              </li>

	                              <li>
	                                <time>September 1999</time>
	                                <p> OptionRally to Release Its Annual Tech Stock Sector Analysis OptionRally to Release Its Annual Tech Stock Sector Analysis</p>
	                              </li>

	                              <li>
	                                <time>September 2003</time>
	                                <p>Started high school</p>
	                              </li>

	                              <li>
	                                <time>September 2006</time>
	                                <p>Started 6th Form</p>
	                              </li>

	                              <li>
	                                <time datetime="2007-11-19">November 2007</time>
	                                <p>Registered csswizardry.com</p>
	                              </li>
	                           </ol>
	                           <div class="style">
	                           		<hr>
	                           </div>
	                           <center><a href="activity-see-all.html">See All</a></center>
	                       </div>
                       </div>

                       <div class="row data9-top">
                         <div class="heading">
                            Products/Projects
                            <span class="pull-right">
                            	<a href="products-projects.html">Edit <i class="fa fa-pencil-square-o"></i></a>
                            </span>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="https://hotspotorlando.files.wordpress.com/2013/04/20130410135113enprnprn-baskin-robbins-logo-ii-1y-1-1-1365601873mr.jpg?w=350&h=350" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                    <h5><b>Baskin Robins</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="http://brandongaille.com/wp-content/uploads/2013/07/Target-Company-Logo.jpg" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                     <h5><b>Target Company</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="http://www.car-logos.org/wp-content/uploads/2011/09/volkswagen.png" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                    <h5><b>Volkswagen</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="http://2.bp.blogspot.com/-Qsk9et4niF0/T4FK_U_ARJI/AAAAAAAACCc/vk3UdvLNQ-Q/s1600/logo1055.png" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                     <h5><b>Starbucks</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="http://brandongaille.com/wp-content/uploads/2013/07/Shell-Company-Logo.jpg" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                    <h5><b>Shell company</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="col-md-3"><img src="http://brandongaille.com/wp-content/uploads/2013/07/Dell-Company-Logo.jpg" style="width:65px;height:65px;"></div>
                                <div class="col-md-9">
                                     <h5><b>DELL</b></h5>
                                    <p>A unique web-mail service with authenticated mobile number as email ID Hassle not with your mail ID, just use your mobile number instead'</p>
                                </div>
                             </div>
                         </div>
                          <div class="style">
                           		<hr>
                           </div>
                         <center style="margin-bottom:10px;"><a href="products-see-all.html">See All</a></center>
                       </div> 

                       <div class="row data7-top">
                       		<div class="col-md-6" style="padding-left: 0px;">

	                         <div class="heading">
	                            Current Team (5)
	                            <span class="pull-right">
	                            	<a href="people-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
	                            </span>
	                         </div>
	                            <ul class="parters-list1">
	                             <li>
	                                <span><img src="https://www.morganstanley.com/assets/images/people/tiles/adam-parker-large.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Ved Acharya</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                              <li>
	                                <span><img src="http://userpages.umbc.edu/~tliu4/images/images/images/profile.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4> Abhinav</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                            </ul>
	                            <ul class="parters-list2">
	                              <li>
	                                <span><img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Naveen Singh</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                              <li>
	                                <span><img src="http://www.fastcompany.com/multisite_files/fastcompany/fc_files/profile/2219225-austin-carr-profile.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Harsha</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                            </ul>
	                            <div class="style"><hr></div>
	                            <center><a href="people-see-all.html">See All</a></center>
	                        </div>

	                        <div class="col-md-6" style="padding-right: 0px;">
	                        	<div class="heading">
		                            Past Team (5)
		                            <span class="pull-right">
		                            	<a href="people-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
		                            </span>
	                        	</div>
	                            <ul class="parters-list1">
	                             <li>
	                                <span><img src="https://neilwhitesell.files.wordpress.com/2012/09/neil_whitesell.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Karthik raghavan</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                              <li>
	                                <span><img src="https://www.morganstanley.com/assets/images/people/tiles/michael-wilson.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Soundarajan</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                            </ul>
	                            <ul class="parters-list2">
	                              <li>
	                                <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Nemer_Saade_Profile_Picture.jpg/784px-Nemer_Saade_Profile_Picture.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4>Avinash Mukharjee</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                              <li>
	                                <span><img src="https://www.morganstanley.com/assets/images/people/tiles/michael-wilson.jpg" style="width:50px;height:50px;"></span>
	                                <div class="partner-info">
	                                    <h4> Harsha Goteti</h4>
	                                    <h5>Director</h5>
	                                </div>
	                             </li>
	                            </ul>
	                            <div class="style"><hr></div>
	                            <center><a href="people-see-all.html">See All</a></center>
	                        </div>
                       </div>

                       <div class="row data15-top">
                            <div class="heading">
                                Office Locations
                                <span class="pull-right">
	                            	<a href="office-locs-edit.html">Edit <i class="fa fa-pencil-square-o"></i></a>
	                            </span>
                             </div>
                            <ul class="locations">
                              <li>
                                <div class="info-block">
                                    <h4>Google - Headquarters</h4>
                                    <p>Google Mountain View,
									1600 Amphitheatre Parkway,
									Mountain View, CA 94043.
									Phone: +1 650-253-0000</p>
                                </div>
                              </li>
                               <li>
                                <div class="info-block">
                                    <h4>Tata Consultancy Services</h4>
                                    <p>Plot No.44 Hosur Main Road, Electronics City, Bengaluru, Karnataka 560100 Phone:080 2852 0261</p>
                                </div>
                              </li>
                               <li>
                                <div class="info-block">
                                    <h4>Equivas Capital - HQ</h4>
                                    <p> Indian Immunologicals Colony, Gachibowli, Hyderabad, Andhra Pradesh 500032</p>
                                </div>
                               </li>
                            </ul>
                       </div> 

                       <div class="row documents">
                       		<div class="heading">
                                Documents
                                <span class="pull-right">
	                            	<a href="documents-share.html">Edit <i class="fa fa-pencil-square-o"></i></a>
	                            </span>
                            </div>
                       		<div class="col-md-12 docs">
					      		<table class="table table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Document name</th>
											<th>Year</th>
											<th>Share</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td>1</td>
											<td>financial document.ppt</td>
											<td>2010</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>
										
										<tr>
											<td>2</td>
											<td>Income statement</td>
											<td>2008</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>
										
										<tr>
											<td>3</td>
											<td>Pitch.ppt</td>
											<td>2015</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>

										<tr>
											<td>4</td>
											<td>Income statement</td>
											<td>2008</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>

										<tr>
											<td>5</td>
											<td>Income statement</td>
											<td>2008</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>

										<tr>
											<td>6</td>
											<td>Income statement</td>
											<td>2008</td>
											<td><span class="share-file"><a href="" data-toggle="modal" data-target="#share-doc">Share</a></span></td>
										</tr>
									</tbody>
								</table>
		                        <div class="style"><hr></div>
		                        <center><a href="docs-see-all.html">See All</a></center>
							</div>
                       </div>

                       <div class="report-abuse"><a href="" data-toggle="modal" data-target="#report-abuse"><font color="red">Report Abuse</font></a></div>


                    </div>


                    <div id="back-top">
			            <!-- scroll top button -->	<a href="#top"><span><i class="fa fa-arrow-up"></i></span>back to top</a>
			        </div>



                    <!-- Share Modal -->

                    <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					     <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Share this project with potential Investors.</h4>
					        </div>
					        <div class="modal-body">
					        	<div class="row invitee">
					 				<div class="col-md-12">

					                    <div id="invitee-header" style="background-color:#514e4e;height:30px">
											<div id="title" style="padding-left: 12px;font-size: 20px;color: white;font-family: search;">FundPitch</div>
										</div>
										<div id="invitee-body">
											<div class="row">
						                        <div class="col-md-12">
						                        	<div class="col-md-12">
						                                <div class="col-md-6" style="padding-left: 0px;">
						                                <span class="grey">Project Posted By : </span><span class="Establisehd">Satyanarayana- Consultant</span></div>
						                                <div class="col-md-6" style="padding-left: 0px;"><span class="grey">Relation with the company : </span> <span id="founders">Formal Relation</span></div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><i class="fa fa-calendar"></i>
						                                <span class="grey">Founded in : </span><span class="Establisehd">2007</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;"><i class="fa fa-users"></i><span class="grey">Founders : </span> <span id="founders">Sachin Bansal, Binny Bansal</span></div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Sector : </span><span class="sector">E-commerce, Online shopping</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">Key Associations : </span><span class="sector">Venture Capitalists</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Company Type : </span><span class="sector">MNC</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">Sector/Market size : </span><span class="sector">5</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Company Capacity : </span><span class="sector">421</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">IPO : </span><span class="sector">Flpkrt</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Company Target Market : </span><span class="sector">421 Crs</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">Company Locations : </span><span class="sector">Hyderabad, Benguluru, Chennai</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Number of Products & Services : </span><span class="sector">18</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">Number of Patents : </span><span class="sector">4</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                                <div class="col-md-5" style="padding-left: 0px;"><span class="grey">Number of Products & Services :</span><span class="sector">18</span></div>
						                                <div class="col-md-7" style="padding-left: 0px;">
						                                 	<span class="grey">Number of Patents :</span><span class="sector">4</span> 
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                            	&copy; 2015     <strong>FundPitch</strong>     All Rights Reserved.
						                        	</div>
						                        </div>
							                </div>
										</div>
					                </div>
					            </div>

						        <span class="share-email">

						          	<input type="text" id="share-text" class="form-control" placeholder="Enter Email IDs">
						          	<div class="share-text">
						          		<textarea class="form-control" id="field-ta" placeholder="Add a note" rows="5" cols="40"></textarea>
						          	</div>
						        </span>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">Share</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					</div>


					<!-- Docs Share Modal -->

                    <div class="modal fade" id="share-doc" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					     <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Share this project with potential Investors.</h4>
					        </div>
					        <div class="modal-body">
						        <span class="share-email">

						          	<input type="text" id="#share-document" class="form-control" placeholder="Enter Email IDs">
						          	<div class="share-data">
						          		<textarea class="form-control" id="field-ta" placeholder="Add a note" rows="5" cols="40"></textarea>
						          	</div>
						        </span>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">Share</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					</div>



                    <!-- Report Abuse Modal -->

                    <div class="modal fade" id="report-abuse" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					     <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Are you sure you want to report this project.?</h4>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					</div>

					 <!-- Merge Modal -->

				    <div class="modal fade" id="merge-details" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Merge Details</h4>
						        </div>
						        <div class="modal-body">
						        	<div class="col-md-12">
			                        	<div class="table-responsive">          
											  <table class="table">
											    <thead>
											      <tr>
											        <th>Merge date</th>
											        <th>Merged with</th>
											        <th>Value</th>
											      </tr>
											    </thead>
											    <tbody>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											    </tbody>
											  </table>
										</div>
		                        	</div>
						        </div>
						    </div>
					      
					    </div>
				    </div>

				    <!--Acquisitions modal -->

				    <div class="modal fade" id="acqui-details" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Acquisition Details</h4>
						        </div>
						        <div class="modal-body">
						        	<div class="col-md-12">
			                        	<div class="table-responsive">          
											  <table class="table">
											    <thead>
											      <tr>
											        <th>Acquisition date</th>
											        <th>Acquired By/From</th>
											        <th>Value</th>
											      </tr>
											    </thead>
											    <tbody>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											      <tr class="width-increase">
											        <td>23rd jan 2013</td>
											        <td>Global technologies</td>
											        <td>2300 Cr</td>
											      </tr>
											    </tbody>
											  </table>
										</div>
		                        	</div>
						        </div>
						    </div>
					      
					    </div>
				    </div>

                </div>



                <!--Pitch Modal -->
                <div class="modal fade bs-example-modal-lg" id="pitch-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				     	<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h3 class="modal-title">Fund Requirement for Equity Share</h3>
					       
					         <span class="express"><button type="button" class="col-md-2 btn btn-warning" id="record-expression">Willing to invest ?</button>

						        <div class="if-interested">
						        	<div class="col-md-12">
		                                <div class="col-md-3 total-interest">
		                                	Project Status : <span class="green">Active</span>
		                                </div>
		                                <div class="col-md-4 interest">
		                                	Consultant's Expression of Interest : Participant
		                                </div>
		                                <div class="col-md-4 interest">
		                                	Consultant's Investment : 25 %
		                                </div>
		                            </div>  
		                            <div class="col-md-12">
		                                <div class="col-md-3 invest-indv">
		                                	<i class="fa fa-star"></i>21 Commitments by Individuals
		                                </div>
		                                <div class="col-md-3 invest-vc">
		                                	<i class="fa fa-star"></i>123 Commitments by VC's/PE's
		                                </div>
		                                <div class="col-md-3 total-interest">
		                                	<i class="fa fa-star"></i>214 Commitments by VC's/PE's
		                                </div>
		                                <div class="col-md-3 interest-commit">
		                                	<i class="fa fa-star"></i>23 Total Commitments
		                                </div>
		                            </div>  
		                            <div class="col-md-12 interests">
		                                <div class="col-md-5 how-much">
		                                	<div class="col-md-8">How much you would like to invest.?</div>
		                                	<div class="col-md-4">
		                                		<select class="form-control">
													<option>10%</option>
													<option>20%</option>
													<option>30%</option>
													<option>40%</option>
													<option>50%</option>
													<option>60%</option>
													<option>70%</option>
													<option>80%</option>
													<option>90%</option>
													<option>100%</option>
												</select>
		                                	</div>
		                                </div>
		                                <div class="col-md-2">
		                                	<button type="button" class="btn btn-success">Show Interest</button>
		                                </div>
		                            </div>           
						        </div>
					        </span>
				        </div>
				        <div class="modal-body">
				        	<a href="#" class="sticky-share button" data-toggle="modal" data-target="#myModal"  data-dismiss="modal"><i class="fa fa-share"></i>Share Project</a>
				        	<div class="row">
							    <div class="col-md-2" id="my-nav">

									<ul class="cbp_tmtimeline">
										<li>
											<div class="cbp_tmicon">
												<a href="#moose"><i class="entypo-user"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											
											<div class="cbp_tmicon">
												<a href="#bear"><i class="entypo-feather"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											
											<div class="cbp_tmicon">
												<a href="#beaver"><i class="entypo-suitcase"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											<div class="cbp_tmicon">
												<a href="#raccoon"><i class="entypo-location"></i></a>
											</div>

											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>			
											
											<div class="cbp_tmicon">
												<a href="#bobcat"><i class="entypo-camera"></i></a>
											</div>

											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										<li>
											<div class="cbp_tmicon">
												<a href="#one"><i class="entypo-user"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											
											<div class="cbp_tmicon">
												<a href="#two"><i class="entypo-feather"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											
											<div class="cbp_tmicon">
												<a href="#three"><i class="entypo-suitcase"></i></a>
											</div>
											
											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>
											<div class="cbp_tmicon">
												<a href="#four"><i class="entypo-location"></i></a>
											</div>

											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
										
										<li>			
											
											<div class="cbp_tmicon">
												<a href="#five"><i class="entypo-camera"></i></a>
											</div>

											<div class="cbp_tmlabel empty">
												
											</div>
										</li>
									</ul>
							    </div>

							    <div class="col-md-10 my-content">
							      <section id="moose">
							          <img src="assets/images/p1.png" style="height:600px;width:100%;">
							      </section>
							      <section id="bear">
							          <img src="assets/images/p2.png" style="height:600px;width:100%;">
							      </section>
							      <section id="beaver">
							         <img src="assets/images/p3.png" style="height:600px;width:100%;">
							      </section>
							      <section id="raccoon">
							        <img src="assets/images/p4.png" style="height:600px;width:100%;">
							      </section>
							      <section id="bobcat">
							        <img src="assets/images/p5.png" style="height:600px;width:100%;">
							      </section>
							      <section id="one">
							          <img src="assets/images/p6.png" style="height:600px;width:100%;">
							      </section>
							      <section id="two">
							          <img src="assets/images/p7.png" style="height:600px;width:100%;">
							      </section>
							      <section id="three">
							         <img src="assets/images/p4.png" style="height:600px;width:100%;">
							      </section>
							      <section id="four">
							        <img src="assets/images/p2.png" style="height:600px;width:100%;">
							      </section>
							      <section id="five">
							        <img src="assets/images/p4.png" style="height:600px;width:100%;">
							      </section>
							    </div>
							</div>	
				        </div>
				    </div>
				  </div>
				</div>

            </div>
        </div>


		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>