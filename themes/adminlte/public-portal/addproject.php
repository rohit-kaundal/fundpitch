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

		<h3>Project Submission form</h3>
		
		<form id="rootwizard-2" method="post" action="" class="form-wizard validate">
			
			<div class="user-form">
				<div class="tab-content">
					<div class="tab-pane active" id="tab2-1">

						<h3>Project Details</h3>
						<div class="style"><hr></div>

						<div class="row zero">
						
							<div class="col-md-5">
								<div class="form-group">
									<label class="control-label" for="full_name">Project Title</label>
									<input type="text" class="form-control" id="field-1" placeholder="">
								</div>
							</div>


							<div class="col-md-5 col-md-offset-1">
								<label class="control-label" for="timeline">Project Timeline</label>
								<select class="form-control">
									<option>15 Days</option>
									<option>30 Days</option>
									<option>45 Days</option>
									<option>60 Days</option>
								</select>
							</div>

						</div>

						<!--<div class="row project-status">

							<div class="col-md-12">
								<div class="col-md-5" style="padding-left: 0px;">
										<label class="control-label" for="timeline">Limit your project visibility</label>
										<div class="col-md-12 PP-option">
				                            <label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="bank"/>Private</label>
											<label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="school" disabled/>Public</label>
										</div>
								</div>

								<div class="col-md-4 col-md-offset-1">
									<div class="form-group">
										<label class="control-label" for="logo">Project is posted as</label>
										<select class="form-control" disabled>
											<option>Investment Banker</option>
										</select>
									</div>
								</div>
							</div>

						</div>-->

						<div class="row zero">
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Association with the company</label>
									<div class="col-md-12 NE-option">
										<label class="new-exist"><input type="radio" name='thing' value='valuable' data-id="exist"/>Existing Portfolio</label>
										<label class="new-exist"><input type="radio" name='thing' value='valuable' data-id="new"/>New to Portfolio</label>
					                            
											<div id="exist" class="none">
												<h5>Any association with the board member/promoter.?</h5>
												<input type="text" class="form-control" id="field-1" placeholder="Since how long you know the board member/promoter ?">
											</div>
											<div id="new" class="none">
												<h5>Since how many years</h5>
												<input type="text" class="form-control" id="field-1" placeholder="">
											</div>
					          		</div>
								</div>
							</div>

							<div class="col-md-5 col-md-offset-1">

							</div>

						</div>


						<h3>Company Details</h3>
						<div class="style"><hr></div>
						
						<div class="row one">
							
							<div class="col-md-5">
								<div class="form-group">
									<label class="control-label" for="full_name">Company Name</label>
									<input type="text" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="col-md-4 col-md-offset-1">
								<div class="form-group">
									<label class="control-label" for="established">Established</label>
									<div class="one-line">
										<input class="form-control datepicker" data-format="D, dd MM yyyy" placeholder="dd MM yyyy">
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Head Quarters</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>

								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label" for="full_name">Number of Employees</label>
										<select class="form-control" style="border-color: #787878;">
											<option>below 100</option>
											<option>100-500</option>
											<option>500-1000</option>
											<option>Above 1000</option>
										</select>
									</div>
								</div>

						</div>


						<div class="row two">

							<div class="col-md-5">
								<div class="form-group">
									<label class="control-label" for="full_name">Company Type (Eg: MNC, Conglomerate, Subsidiary)</label>
									<input type="text" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									<label class="control-label" for="full_name">Sector(s)</label>
									<select name="test" class="select2" multiple>
										<option value="3" >Biotechnology</option>
										<option value="2" >Healthcare</option>
										<option value="5" >IT</option>
										<option value="1" >IT security</option>
										<option value="4" >Real Estate</option>
										<option value="12" >Electronics</option>
										<option value="11" >Hospitality</option>
										<option value="13" >Transportation</option>
										<option value="14" >Mining</option>
										<option value="15" >Education</option>
										<option value="16">Fintech</option>
										<option value="17">E-commerce</option>
									</select>
								</div>
							</div>

						</div>

						

						<div class="row hq">

							
							<div class="col-md-5">
								<div class="form-group">
									
									<label class="control-label ipo-name" for="full_name">IPO Listing Status</label><div class="checkbox ipo">
										<div class="col-md-12 PP-option">
				                            <label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="ipo-yes"/>Yes</label>
											<label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="ipo-no"/>No</label>
												<div id="ipo-yes" class="none"></div>
												<div id="ipo-no" class="none">
												 	<div class="col-md-5" style="padding-left: 5px;padding-right: 5px;">
												 		<label class="control-label ipo-name" for="full_name">Eg: BSE, NSE etc</label>
												 		<select name="test" class="select2" multiple style="padding-left: 5px;padding-right: 5px;">
															<option value="1" >NSE</option>
															<option value="2" >BSE</option>
															<option value="3" >NYSE</option>
															<option value="4" >SGX NIFTY</option>
															<option value="5" >NASDAQ</option>
															<option value="6" >CSE</option>
															<option value="7" >SSE</option>
														</select>
													</div>
													<div class="col-md-7" style="padding-left: 5px;padding-right: 5px;">
														<label class="control-label ipo-name" for="full_name">IPO Name</label>
												 		<input type="text" class="form-control" id='yes' name='yes'  placeholder="Eg: ONGC_NSE">
												 	</div>
												</div>
										</div>
									</div>
								</div>
                            </div>

                            <div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									<label class="control-label ipo-name" for="full_name">Scope of Company</label><br>
									<input type="text" class="form-control" id="field-1" placeholder="">
								</div>
                            </div>
						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Size of Targeted Markets</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>

	                            <div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label ipo-name" for="full_name">Market Size of Sector(s) </label><br>
										<input type="text" class="form-control" id="field-1" placeholder=" Eg: 10 billion">
									</div>
	                            </div>
								

						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Clients</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label ipo-name" for="full_name">Number of offered Products & Services</label><br>
										<input type="text" class="form-control" id="field-1" placeholder="">										
									</div>
	                            </div>

						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Current Valuation</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label ipo-name" for="full_name">Key Associations( Eg: PE's, VC's, Big4 Auditors )</label><br>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
	                            </div>

						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Number of Patents</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label ipo-name" for="full_name">Market Peers</label><br>
										<input type="text" class="form-control" id="field-1" placeholder="Please mention not more than 3 companies">
									</div>
	                            </div>

						</div>

						
						<!--<div class="row six">
							
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" for="comp-about" style="margin-bottom: 15px;">About Your Company(in brief)</label>
									<input placeholder="Eg: Clipkart is the leader of e-commerce in the fast growing Indian market. The company focuses on goods such as electronics, books, music and movies." type="text" value=""/>
									<input placeholder="" type="text" value=""/>
								</div>
							</div>
			
						</div>-->

						<div class="row comp-detailed">
							
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" for="about-detail">About Your Company(in detail)</label>
									
									<div class="form-group">
										<textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="sample_wysiwyg" id="sample_wysiwyg"></textarea>
									</div>
								</div>
							</div>
			
						</div>

						<div class="row four">
							<div class="col-md-12">
	                            <label class="control-label" for="established">Company Locations</label>
	                            <div class="multi-field-wrapper">
	                              <div class="multi-fields">
	                                <div class="multi-field">
										<div class="col-md-10">
	                                        <input placeholder="Eg: CES Pvt ltd, 253/A, Venkateswara Colony, Road no-12, Banjara HIlls, Hyderabad-500 034, Telangana." type="text" value=""/>
	                                    </div>
	                                    	<button type="button" class="btn btn-default remove-field" style="margin-bottom: 26px;"><span class="glyphicon glyphicon-trash"></span></button>
	                                </div>
	                              </div>
	                              <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                            </div>
	                        </div>
	                        
						</div> 

						<div class="row web">
							<div class="col-md-5">
								<div class="form-group">
									<label class="control-label" for="full_name">Website</label>
									<input placeholder="" type="text" value=""/>
								</div>
							</div>

							<div class="col-md-4 col-md-offset-1">
								<div class="form-group">
									<label class="control-label" for="logo" style="margin-bottom: 15px;">Company Logo</label>
									<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
								</div>
							</div>

						</div>


						<div class="row pitch-ppt">
							<div class="col-md-12"><h3>Pitch Details</h3></div>
					        <div class="col-md-12 style"><hr></div>
							<label class="control-label" for="logo" style="margin-bottom: 15px;margin-left:14px;">Upload your company's pitch PPT here. </label> <br>For your reference click <a href="http://guykawasaki.com/the-only-10-slides-you-need-in-your-pitch/">here</a>  
							<div class="col-md-4">
								<div class="form-group">
									<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
								</div>
							</div>
				        </div>

						
						<div class="row fund-requirement">
							<div class="col-md-3"><h3>Requirement</h3></div>
							
							<div class="col-md-4" id="select-fund">
								<select id="target" class="form-control">
						            <option value="">Select...</option>
						            <option value="content_1">Funding</option>
						            <option value="content_2">Merge or Acquisition</option>
						            <option value="content_3">Association</option>
						        <select>
					        </div>
					        <div class="col-md-12 style"><hr></div>
				        </div>

						<div id="content_1" class="inv">

							<div class="row fund">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="full_name">Primary Reason for needing Capital</label>
										<select id="target" class="form-control">
								            <option >Select...</option>
								            <option >Research and Development</option>
								            <option >Sales & Marketing</option>
								            <option >Property</option>
								            <option>Equipment and Inventory</option>
								            <option>Working Capital</option>
								            <option>Debt Refinance</option>
								            <option>Web Development</option>
								            <option>Acquisition</option>
								            <option>Staff</option>
								            <option>Other</option>
								        <select>
									</div>
								</div>

								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label" for="logo" style="margin-bottom: 5px;">How much fund raised previously.?</label>
										<span class="one-line-flex">
											<span><input type="text" class="form-control" id="fund-raised" placeholder=""></span>
											<span>
												<select id="amount" class="form-control">
										            <option value="">Lakhs</option>
										            <option value="">Crores</option>
										            <option value="">Million</option>
										            <option value="">Billion</option>
										        <select>
										    </span>
									        <span>
									        	<select id="currency" class="form-control">
										            <option value="">Currency</option>
										            <option value="">INR</option>
										            <option value="">USD</option>
										            <option value="">Euro</option>
										        <select>
									       </span>
								       </span>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" for="full_name">Fund Requirement</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-2" style="top: 
								 23px;">
									<select id="target" class="form-control">
							            <option value="">Lakhs</option>
							            <option value="">Crores</option>
							            <option value="">Million</option>
							            <option value="">Billion</option>
							        <select>
								</div>
								<div class="col-md-2" style="top: 23px;">
							        <select id="target" class="form-control">
							            <option value="">Currency</option>
							            <option value="">INR</option>
							            <option value="">USD</option>
							            <option value="">Euro</option>
							        <select>
								</div>
							</div>
							
							<div class="row">
								<textarea class="form-control" id="about-project" placeholder="Add a note" rows="5" cols="45"></textarea>
							</div>
						</div>

						<div id="content_2" class="inv">
							<label class="pub-pri"><input type="radio" name='thing' value='valuable'/>Merge</label>
							<label class="pub-pri"><input type="radio" name='thing' value='valuable'/>Acquisition</label>
							<div class="row">
								<textarea class="form-control" id="about-project" placeholder="Eg: Target, targeted company/fund etc" rows="5" cols="45"></textarea>
							</div>
						</div>

						<div id="content_3" class="inv">
							<div class="row">
								<textarea class="form-control" id="about-project" placeholder="Details" rows="5" cols="45"></textarea>
							</div>
						</div>

						<div class="row user-from-submit">
							<a href="user-participation.html"><span class="col-md-1 col-md-offset-5 btn btn-primary submit" type="submit">Submit</span></a>
						</div>
						
					</div>
				</div>
			</div>
		
		</form>

		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>
