<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>




		<div class="alert-message-success">
			<div class="alert alert-success">Your project has been successfully submitted.</div>
		</div>
		
		<form id="rootwizard-2" method="post" action="" class="form-wizard validate">
			
			<div class="steps-progress">
				<div class="progress-indicator"></div>
			</div>
			
			<ul>
				<li class="active">
					<a href="#tab2-1" data-toggle="tab"><span><i class="fa fa-info"></i></span>Basic Info</a>
				</li>
				<li>
					<a href="#tab2-2" data-toggle="tab"><span><i class="fa fa-inr"></i></span>Financials</a>
				</li>
				<li>
					<a href="#tab2-3" data-toggle="tab"><span>3</span>People</a>
				</li>
				<li>
					<a href="#tab2-4" data-toggle="tab"><span>4</span>Media</a>
				</li>
				<li>
					<a href="#tab2-5" data-toggle="tab"><span>5</span>Pitch</a>
				</li>
			</ul>
			
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

						<div class="row project-status">

							<div class="col-md-12">
								<div class="col-md-5" style="padding-left: 0px;">
										<label class="control-label" for="timeline">Limit your project visibility</label>
										<div class="col-md-12 PP-option">
				                            <label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="bank" checked/>Private</label>
											<label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="school" disabled/>Public</label>
										</div>
								</div>

								<div class="col-md-4 col-md-offset-1">
									<div class="form-group">
										<label class="control-label" for="logo">Project is posted as</label>
										<select class="form-control" disabled>
											<option>Consultant</option>
										</select>
									</div>
								</div>
							</div>

						</div>

						<div class="row zero">
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Relation with the company</label>
									<div class="col-md-12 NE-option">
										<label class="new-exist"><input type="radio" name='thing' value='valuable' data-id="exist"/>Existing Portfolio</label>
										<label class="new-exist"><input type="radio" name='thing' value='valuable' data-id="new"/>New to Portfolio</label>
					                            
											<div id="exist" class="none">
												<h5>Any contact with the board/promoter.?</h5>
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
										<input class="form-control datepicker" data-format="D, dd MM yyyy">
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row two">

							<div class="col-md-5">
							<div class="form-group">
								<label class="control-label" for="full_name">Sectors</label>
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


							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									<label class="control-label ipo-name" for="full_name">Market Size of Sector</label><br>
									<input type="text" class="form-control" id="field-1" placeholder="">
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
								<div class="col-md-6 col-md-offset-1">
									<div class="form-group">
										
										<label class="control-label ipo-name" for="full_name">IPO Stock Name</label><div class="checkbox ipo">
											<div class="col-md-12 PP-option">
					                            <label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="ipo-yes"/>Yes</label>
												<label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="ipo-no"/>No</label>
													<div id="ipo-yes" class="none"></div>
													<div id="ipo-no" class="none">
														<div class="col-md-7" style="padding-left: 5px;padding-right: 5px;">
															<label class="control-label ipo-name" for="full_name">IPO Name</label>
													 		<input type="text" class="form-control" id='yes' name='yes'  placeholder="Eg: ONGC_NSE">
													 	</div>
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
													</div>
											</div>
										</div>
									</div>
	                            </div>

						</div>

						<div class="row hq">

							<div class="col-md-5">
								<div class="form-group">
									<label class="control-label" for="full_name">Company Type (Eg: MNC, Conglomerate, Subsidiary)</label>
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

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Targeted Markets by Company</label>
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<label class="control-label ipo-name" for="full_name">Scope of Company Capacity</label><br>
										<input type="text" class="form-control" id="field-1" placeholder="">
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
										<label class="control-label ipo-name" for="full_name">Number of Products & Services</label><br>
										<input type="text" class="form-control" id="field-1" placeholder="">										
									</div>
	                            </div>

						</div>

						<div class="row hq">

								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Company Valuation</label>
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
										<label class="control-label ipo-name" for="full_name">Peers you would like to compare with.</label><br>
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
						
					</div>
				
				<div class="tab-pane" id="tab2-2">
					

					<div class="row ten">
						
						<div class="col-md-12">
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Current year turn over</label>
									<div class="one-line">
										<div class="col-md-5"><input placeholder="" type="text" value=""/></div>
										<div class="col-md-4">
											<select class="form-control">
												<option>Thousands</option>
												<option>lacs</option>
												<option>Crs</option>
												<option>Million</option>
												<option>Billion</option>
											</select>
										</div>
										<div class="col-md-3">
											<select class="form-control">
												<option>INR</option>
												<option>USD</option>
												<option>Euro</option>
												<option>Pound</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Estimated turn over for next year</label>
									<div class="one-line">
										<div class="col-md-5"><input placeholder="" type="text" value=""/></div>
										<div class="col-md-4">
											<select class="form-control">
												<option>Thousands</option>
												<option>lacs</option>
												<option>Crs</option>
												<option>Million</option>
												<option>Billion</option>
											</select>
										</div>
										<div class="col-md-3">
											<select class="form-control">
												<option>INR</option>
												<option>USD</option>
												<option>Euro</option>
												<option>Pound</option>
											</select>
										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>

						
					<div class="row eight">

						<div class="col-md-12">
							<label class="control-label" for="timeline">Investments</label>
                            <div class="style"><hr></div>
                            <div class="multi-field-wrapper" style="display: -webkit-box;">
                              <div class="multi-fields">
                                <div class="multi-field" style="margin-left: 0px;">
	                                	<div class="one-line col-md-3">
											<input class="form-control datepicker" data-format="D, dd MM yyyy">
											<div class="input-group-addon">
												<a href="#"><i class="entypo-calendar"></i></a>
											</div>
										</div>
	                                	<div class="col-md-3">
	                                	    <input placeholder="Invested in" type="text" value=""/>
	                                	</div>
	                                	<div class="col-md-3">
	                                	    <input placeholder="Amount" type="text" value=""/>
	                                	</div>
	                                	<div class="col-md-2">
	                                		<select class="form-control" style="padding:2px 5px;">
												<option>USD</option>
												<option>Rs</option>
												<option>Euro</option>
												<option>Pound</option>
												<option>Option 5</option>
											</select>
	                                	</div>
	                                    <button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
                                </div>
                              </div>
                              <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
                            </div>
                        </div>
						
					</div>
					
					<div class="row nine">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Acquisitions</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper" style="display: -webkit-box;">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
		                            	<div class="one-line col-md-3">
											<input class="form-control datepicker" data-format="D, dd MM yyyy">
											<div class="input-group-addon">
												<a href="#"><i class="entypo-calendar"></i></a>
											</div>
										</div>
		                            	<div class="col-md-3">
			                                   <input placeholder="Aquired from" type="text" value=""/>
										</div>
										<div class="col-md-3">
			                                   <input placeholder="Amount" type="text" value=""/>
										</div>
										<div class="col-md-2">
	                                		<select class="form-control" style="padding:2px 5px;">
												<option>USD</option>
												<option>Rs</option>
												<option>Euro</option>
												<option>Pound</option>
												<option>Option 5</option>
											</select>
	                                	</div>
		                                <button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>
						
					</div>
					
					<div class="row eleven">
						
						<div class="col-md-12">
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Present Credit facilities</label>
									<textarea class="form-control autogrow" name="about" id="about" data-validate="maxlength[100]" rows="2" placeholder=""></textarea>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="full_name">Taxability of products</label>
									<textarea class="form-control autogrow" name="about" id="about" data-validate="maxlength[100]" rows="2" placeholder=""></textarea>
								</div>
							</div>

						</div>
						
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-3">

					<div class="row prom">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Promoters</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper" style="display: -webkit-box;">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-4">
	                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<select placeholder="designation" name="test" class="select2" multiple>
													<option value="1" >Board Member</option>
													<option value="2" >Advisor</option>
													<option value="3" >Promoter</option>
													<option value="4" >Current team Member</option>
													<option value="5" >Past Team Member</option>
													<option value="6" >Director</option>
													<option value="7" >CEO</option>
												</select>
										</div>
									</div>
									<div class="col-md-3">
										<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
									</div>
	                                <button type="button" class="btn btn-default remove-field" style="height: 34px;"><span class="glyphicon glyphicon-trash"></span></button>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span>Add more</span></button>
	                        </div>
                    	</div>
						
					</div>

					<!--<div class="row thirteen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Current Team</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-3">
		                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-3">
		                                   <input placeholder="designation" type="text" value=""/>
									</div>
	                                <div class="col-md-4">
	                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
	                                </div>
	                                <button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>

					</div>

					<div class="row fourteen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Past Team</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-3">
		                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-3">
		                                   <input placeholder="designation" type="text" value=""/>
									</div>
	                                <div class="col-md-4">
	                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
	                                </div>
	                                <div class="col-md-1">
	                                		<button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                                </div>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>

					</div>

					<div class="row fifteen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Board Members</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-3">
		                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-3">
		                                   <input placeholder="designation" type="text" value=""/>
									</div>
	                                <div class="col-md-4">
	                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
	                                </div>
	                                <div class="col-md-1">
	                                		<button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                                </div>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>

					</div>

					<div class="row sixteen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Advisors</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-3">
		                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-3">
		                                   <input placeholder="designation" type="text" value=""/>
									</div>
	                                <div class="col-md-4">
	                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
	                                </div>
	                                <div class="col-md-1">
	                                		<button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                                </div>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>

					</div>

					<div class="row seventeen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Investors</label>
	                        <div class="style"><hr></div>
	                        <div class="multi-field-wrapper">
	                          <div class="multi-fields">
	                            <div class="multi-field" style="margin-left: 0px;">
	                            	<div class="col-md-3">
		                                   <input placeholder="Member name" type="text" value=""/>
									</div>
									<div class="col-md-3">
		                                   <input placeholder="designation" type="text" value=""/>
									</div>
	                                <div class="col-md-4">
	                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
	                                </div>
	                                <button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
	                            </div>
	                          </div>
	                          <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
	                        </div>
                    	</div>

					</div>-->
					
				</div>

				
				<div class="tab-pane" id="tab2-4">
					
					<div class="row nineteen">

						<div class="col-md-12">
							<label class="control-label" for="timeline">Documents</label>
                            <div class="style"><hr></div>
                            <div class="multi-field-wrapper" style="display: -webkit-box;">
                              <div class="multi-fields">
                                <div class="multi-field" style="margin-left: 0px;">
										<div class="col-md-4">
		                                   <select class="form-control">
												<option>Annual Report</option>
												<option>Balance Sheet</option>
											</select>
										</div>
										<div class="one-line col-md-3">
												<input class="form-control datepicker" data-format="D, dd MM yyyy">
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
										</div>
		                                <div class="col-md-4">
		                                	<input type="file" class="form-control" id="field-file" placeholder="Placeholder">
		                                </div>
		                                <button type="button" class="btn btn-default remove-field"><span class="glyphicon glyphicon-trash"></span></button>
                                </div>
                              </div>
                              <button type="button" class="btn btn-default add-field"><span><i class="fa fa-plus"></i></span></button>
                            </div>
                        </div>
						
					</div>


					<div class="row eighteen">

						<div class="col-md-12">
							<label class="control-label" for="sub-org">Company Social Profiles</label>
	                        <div class="style"><hr></div>
	                           <div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="full_name">Faceboook</label>
										<input placeholder="" type="text" value=""/>
									</div>
								</div>
								 <div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="full_name">Twitter</label>
										<input placeholder="" type="text" value=""/>
									</div>
								</div>
								 <div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="full_name">Google plus</label>
										<input placeholder="" type="text" value=""/>
									</div>
								</div>
								 <div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="full_name">Linkedin</label>
										<input placeholder="" type="text" value=""/>
									</div>
								</div>
                    	</div>

					</div>
					
				</div>

				
				<div class="tab-pane" id="tab2-5">

						<div class="row fund-requirement">
							<div class="col-md-3"><h3>Requirement</h3></div>
							
							<div class="col-md-4" id="select-fund">
								<select id="target" class="form-control">
						            <option value="">Select...</option>
						            <option value="content_1">Funding</option>
						            <option value="content_2">Merge & Acquisition</option>
						            <option value="content_3">Association</option>
						        <select>
					        </div>
					        <div class="col-md-12 style"><hr></div>
				        </div>

						<div id="content_1" class="inv">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="full_name">Project Value</label>
										<input class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group">
										<div class="checkbox ipo">
												<label class="control-label expression" for="full_name">Expression of Interest</label><br>
												<div class="col-md-12 PE-option">
						                            <label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="part"/>Participant </label>
													<label class="pub-pri"><input type="radio" name='thing' value='valuable' data-id="equity"/>Equity</label>
														<div id="equity" class="none">
															<div class="col-md-9" style="padding-left: 5px;margin-top: 5px;color:#787878;">
														 		How much you would like to invest ?
														 	</div>
														 	<div class="col-md-3" style="padding-left: 5px;padding-right: 5px;">
																<select class="form-control" style="padding-left: 5px;padding-right: 5px; border-color: #787878;">
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
														<div id="part" class="none">
														</div>
												</div>
										</div>
									</div>
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
							<span class="col-md-1 col-md-offset-5 btn btn-primary submit" type="submit">Submit</span>
						</div>
				</div>
				
				<ul class="pager wizard">
					<li class="previous">
						<a href="#"><i class="entypo-left-open"></i> Previous</a>
					</li>
					
					<li class="next">
						<a href="#">Next <i class="entypo-right-open"></i></a>
					</li>
				</ul>
			</div>
		
		</form>
		
		<script type="text/javascript">
		$('.multi-field-wrapper').each(function() {
	    var $wrapper = $('.multi-fields', this);
	    $(".add-field", $(this)).click(function(e) {
	        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
	    });
	    $('.multi-field .remove-field', $wrapper).click(function() {
	        if ($('.multi-field', $wrapper).length > 1)
	            $(this).parent('.multi-field').remove();
	    });
	});
	</script>

	<script type="text/javascript">
		$(':radio').change(function (event) {
	    var id = $(this).data('id');
	    $('#' + id).addClass('none').siblings().removeClass('none');
	});
	</script>

	<script>
        document
            .getElementById('target')
            .addEventListener('change', function () {
                'use strict';
                var vis = document.querySelector('.vis'),   
                    target = document.getElementById(this.value);
                if (vis !== null) {
                    vis.className = 'inv';
                }
                if (target !== null ) {
                    target.className = 'vis';
                }
        });
    </script>

    <script type="text/javascript">
		$(".option-textbx").click(function(){
		  $(this).next(".hidden-input").toggle();
		  $(this).toggleClass("active");
		});
	    
	</script>

	<script type="text/javascript">

	function yesnoCheck() {
	    if (document.getElementById('yesCheck').checked) {
	        document.getElementById('ifYes').style.display = 'block';
	    }
	    else document.getElementById('ifYes').style.display = 'none';
	}
	</script>



<!--
<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
// -->