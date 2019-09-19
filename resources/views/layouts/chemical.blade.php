<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('chemical/img/favicon.ico')}}">

	<title>Material Bootstrap Wizard by Creative Tim</title>
	@yield('style')
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('chemical/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{asset('chemical/img/favicon.png')}}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{asset('chemical/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('chemical/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset('chemical/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url{{asset('chemical/img/wizard-profile.jpg')}}">
	    <!--   Creative Tim Branding   -->
	    {{-- <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="{{asset('chemical/img/new_logo.png')}}">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> --}}

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Details of Carbamate Insecticides
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">About</a></li>
			                            <li><a href="#account" data-toggle="tab">Clinical</a></li>
										<li><a href="#address" data-toggle="tab">Management</a></li>
										<li><a href="#" data-toggle="tab">View</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
		                                            	<input type="text" id="wizard-picture">
		                                        	</div>
		                                        	<h6>PHN Number</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">calendar_today</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Date <small></small></label>
			                                          <input name="date" type="date" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">access_time</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Time <small></small></label>
													  <input name="time" type="time" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">opacity</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Amount* <small></small></label>
			                                            <input name="amount" type="text" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">pets</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Mode <small></small></label>
														<select name="mode" class="form-control"> 
															<option> --Select Mode of Poisoning-- </option>
															<option value="oral ingestion"> oral ingestion </option>
															<option value="inhalation"> inhalation </option>
															<option value="skin contamination"> skin contamination </option>
															<option value="injection"> injection </option>
															<option value="others"> others </option>
														</select>
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">rv_hookup</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Circumstances <small></small></label>
														<select name="circumstances" class="form-control"> 
															<option> --Select the Circumstances-- </option>
															<option value="accidental"> accidental </option>
															<option value="sucidal"> sucidal </option>
															<option value="homicidal"> homicidal </option>
															<option value="others"> others </option>
														</select>
													</div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
									@yield('content')
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text">Carefully mark needed boxes </h4>
		                                    </div>
											<div class="col-sm-12">
												<div class="row-sm-6">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Design">
														<div class="icon">
															<i class="fa fa-pencil"></i>
														</div>
														<h6>Nausea</h6>
													</div>
												</div>
												<div class="row-sm-6">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Code">
														<div class="icon">
															<i class="fa fa-terminal"></i>
														</div>
														<h6>Vomiting</h6>
													</div>
												</div>
												<div class="row-sm-6">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Develop">
														<div class="icon">
															<i class="fa fa-laptop"></i>
														</div>
														<h6>Abdominal cramps</h6>
													</div>
												</div>
												<div class="row-sm-6">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Develop">
														<div class="icon">
															<i class="fa fa-laptop"></i>
														</div>
														<h6>Diarcboea</h6>
													</div>
												</div>
												<div class="row-sm-6">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Develop">
														<div class="icon">
															<i class="fa fa-laptop"></i>
														</div>
														<h6>Sweating</h6>
													</div>
												</div>
											</div>
		                                </div>
									</div>
									<div class="tab-pane" id="">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text">If have any cooments please mention here </h4>
											</div>
											<div class="col-sm-12">
												<label>
										</div>
									</div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div> 
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
		</div> <!--  big container -->
		

	    
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="{{asset('chemical/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('chemical/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('chemical/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('chemical/js/material-bootstrap-wizard.js')}}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{asset('chemical/js/jquery.validate.min.js')}}"></script>
	@stack('script')
</html>
