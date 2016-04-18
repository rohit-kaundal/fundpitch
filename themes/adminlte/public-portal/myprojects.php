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
						<div class="alert alert-success"> Your changes have been successfully updated.</div>
					</div>

					<div class="alert-message-success">
						<div class="alert alert-success"> Your project has been successfully deleted.</div>
					</div>

					<div class="alert-message-success">
						<div class="alert alert-success"> Your project has been successfully published.</div>
					</div>

					<div class="alert-message-success">
						<div class="alert alert-success"> Your project has been successfully published.</div>
					</div>

					<div class="expired-alert">
						<div class="alert alert-info"><strong>Heads up!</strong> Your project has been expired. Request the admin to renew your project timeline. </div>
					</div>

					<h3>My Projects</h3>
		<br />
		
		
						<table class="table table-bordered datatable" id="table-3">
							<thead>
								<tr class="replace-inputs">
									<th>Project title</th>
									<th>Approval status</th>
									<th>Privacy Status</th>
									<th>Invitees</th>
									<th>Posted date</th>
									<th>Expiry</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>Tata consultancy services private limited<span class="label label-primary arrowed">Draft</span></td>
									<td width="15">
										<span class="label label-success">Aprroved</span>
									</td>
									<td width="15"><center>Public</center></td>
									<td width="15"><center><a href="" data-toggle="modal" data-target="#invitee-ban">14</a></center></td>
									<td>23-1-2016</td>
									<td>28-2-2106</td>
									<td>
										<a href="#" class="btn btn-success publish">
											Publish
										</a>
									</td>
									<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
									<td>
										<a href="company-info.html" class="btn btn-default">
											<i class="entypo-pencil"></i>
										</a>
									</td>
									<td>
										<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#alert-renew">
											Renew
										</a>
									</td>	
								</tr>
								
								<tr class="odd gradeX">
									<td>Tata consultancy services</td>
									<td width="15">
										<span class="label label-danger">Rejected</span>
									</td>
									<td width="15"><center>Private</center></td>
									<td width="15"><center><a href="" data-toggle="modal" data-target="#invitee-ban">58</a></center></td>
									<td class="center">23-1-2016</td>
									<td class="expire"><center>Expired</center></td>
									<td>
										<a href="#" class="btn btn-success publish">
											Publish
										</a>
									</td>
									<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
									<td>
										<a href="company-info.html" class="btn btn-default">
											<i class="entypo-pencil"></i>
										</a>
									</td>
									<td>
										<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#alert-renew">
											Renew
										</a>
									</td>	
								</tr>

								<tr class="odd gradeX">
									<td>Tata consultancy services</td>
									<td width="15">
										<span class="label label-warning">Pending</span>
									</td>
									<td width="15"><center>Public</center></td>
									<td width="15"><center><a href="" data-toggle="modal" data-target="#invitee-ban">33</a></center></td>
									<td class="center">23-1-2016</td>
									<td>28-2-2106</td>
									<td>
										<a href="#" class="btn btn-success publish">
											Publish
										</a>
									</td>	
									<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
									<td>
										<a href="company-info.html" class="btn btn-default">
											<i class="entypo-pencil"></i>
										</a>
									</td>	
									<td>
										<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#alert-renew">
											Renew
										</a>
									</td>	
								</tr>
							</tbody>
						</table>

						<!--Invitee ban modal -->

						<div class="modal fade" id="invitee-ban" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Ban the invitees</h4>
						        </div>
						        <div class="modal-body">
						        	<table class="table table-bordered datatable" id="table-3">
										<thead>
											<tr class="replace-inputs">
												<th>Email ID</th>
												<th>Ban user</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td><center>mythrithejaswi@gmail.com</center></td>
												<td>
													<center>
														<div class="ban-button"><i class="fa fa-ban"></i></div>
													</center>
												</td>
												<td style="width:20;">
													<center>
														<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-invitee-modal">
															<i class="fa fa-trash-o"></i>
														</a>
													</center>
												</td>
											</tr>
											<tr class="odd gradeX">
												<td><center>mythri@tcs.com</center></td>
												<td>
													<center>
														<div class="ban-button"><i class="fa fa-ban"></i></div>
													</center>
												</td>
												<td style="width:20;">
													<center>
														<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-invitee-modal">
															<i class="fa fa-trash-o"></i>
														</a>
													</center>
												</td>
											</tr>
											<tr class="odd gradeX">
												<td><center>mythri@meghasolutions.com</center></td>
												<td>
													<center>
														<div class="ban-button"><i class="fa fa-ban"></i></div>
													</center>
												</td>
												<td style="width:20;">
													<center>
														<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-invitee-modal">
															<i class="fa fa-trash-o"></i>
														</a>
													</center>
												</td>
											</tr>
										</tbody>
									</table>
						        </div>
						        <div class="modal-footer">
						        	<button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
						            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div>
						      
						    </div>
					 	</div>

					 	<!--Renewal alert modal -->

					 	<div class="modal fade" id="alert-renew" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Alert</h4>
						        </div>
						        <div class="modal-body">
									<span class="col-md-12 sure">Are you sure you want to renew the project ?</span>
									<span class="col-md-12">
									<span class="col-md-7 change">For how many days you would like to extend ?</span>
							          <span class="col-md-4 projects-edit">
							          	<select class="form-control" style="padding:2px 5px;">
											<option>15 days</option>
											<option>30 days</option>
											<option>45 days</option>
											<option>60 days</option>
										</select>
							          </span>
							        </span>
						        </div>
						        <div class="modal-footer">
						        	<button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
						            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        </div>
						      </div>
						      
						    </div>
					 	</div>

					 	<!--Delete modal-->

						<div class="modal fade" id="delete-modal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Delete Users</h4>
						        </div>
						        <div class="modal-body">
						        	Are you sure you want to delete this Project ?
						        </div>
						        <div class="modal-footer">
						        	<button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
						            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        </div>
						      </div>
						      
						    </div>
					 	</div>


					 	<!--Delete invitee modal-->

						<div class="modal fade" id="delete-invitee-modal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Delete Invitees</h4>
						        </div>
						        <div class="modal-body">
						        	Are you sure you want to delete this Invitee ?
						        </div>
						        <div class="modal-footer">
						        	<button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
						            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        </div>
						      </div>
						      
						    </div>
					 	</div>
					
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

	