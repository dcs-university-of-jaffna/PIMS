
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    @yield('style')
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('chemical/img/favicon.ico')}}"> 

	<title>Material Bootstrap Wizard by Creative Tim</title>
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
	    <!--   Home   -->
	    <a href="/home">
	         <div class="logo-container" onclick="return confirm('Are you sure &#128552 if you go home, datas will be lost &#128533')">
	            <div class="logo">
	                <img src="{{asset('chemical/img/gettyimages-183881669-612x612.jpg')}}">
	            </div>
	            <div class="brand">
	                Go To Home
	            </div>
	        </div>
        </a>
        
        <a href="{{URL::previous()}}">
            <div class="right-container">
               <div class="right">
                   <img src="{{asset('chemical/img/back-button.png')}}" style="width:60px;height:60px" onclick="return confirm('Are you sure &#128552 if you go back, datas will be lost &#128533');">
               </div>
           </div>
       </a>

		<!--  Made With Material Kit  -->
		{{-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">DCS</div>
			<div class="made-with">Department of <strong>Computer Science</strong></div>
		</a> --}}
        
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="{{url('Chemicals_Details/Submitted')}}">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    
                                <div class="wizard-header">
                                    <span class="upper" name="chemicals"> Main_Group -> Chemicals </span>
                                    <span class="above" name="pesticides"> Sub_Group -> Pesticides </span>
		                        	<h3 class="wizard-title">
		                        	   Details of {{$id}}
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">About</a></li>
			                            <li><a href="#clinical" data-toggle="tab">Clinical</a></li>
										<li><a href="#management" data-toggle="tab">Management</a></li>
                                        <li><a href="#laboratry" data-toggle="tab">Laboratry</a></li>
                                        <li><a href="#comments" data-toggle="tab">Comments</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                                        {{$phn->phn}}
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
			                                          <label class="control-label"> <small>Date</small></label>
			                                          <input name="date" type="date" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">access_time</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label"><small>Time</small></label>
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
			                                            <label class="control-label"><small>Amount* </small></label>
			                                            <input name="amount" type="text" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">pets</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label"><small>Mode</small></label>
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
														<label class="control-label"><small> Circumstances </small></label>
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
                                    <div class="tab-pane" id="clinical">
                                            {{-- <h4 class="info-text"> Please Click needed boxs </h4> --}}
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="arrhythmias">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData1 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="coma">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData2 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="diarrhoea">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData3 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="disorientation">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData4 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="dizziness">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData5 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="drowsiness">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData6 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="headache">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData7 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="hypotension">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData8 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="hypothermia">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData9 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="metabolic_acidosis">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData10 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="nausea">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData11 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="providing_sedation">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData12 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="respiratory_failure">                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData13 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="rhabdomyolysis">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData14 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="vominting">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($clinicalData15 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row-sm-6">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <p> If any be additinally, Please mention here </p>
                                                    <textarea name = "clinical_comment" style="width:100%" rows="5">
                                                    
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="management">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text">Carefully mark needed boxes </h4>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label> General </label>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="diazepam">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData4 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="gastric_lavage">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData2 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="nebulisation">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData3 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="resuscitation">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData1 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label> Specific </label>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="ascorbio_acid_iv">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData8 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="atropine">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData5 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="d_penicillamine">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData11 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="hemodialysis">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData12 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>  </label>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="methylene_blue_iv">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData7 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="potassium_ferric">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData9 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="pralidoxime">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData6 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="urinary_alkalinization">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData10 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label> Supportive Care </label>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="adrenaline_im">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData19 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="adrenaline_iv">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData18 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="antibiotics">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData16 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="anticonvulsants">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData13 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="broncho dilators">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData20 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>  </label>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="general_anaesthesia">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData14 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="hydrocortisone_iv">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData21 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="sodium_bicarbonates">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData17 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row-sm-6">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="vitamine_k_therapy">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>@foreach ($managementData15 as $item)
                                                                {{$item->name}}   
                                                            @endforeach</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-sm-6">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <p> If any be additinally, Please mention here </p>
                                                    <textarea name = "management_comment" style="width:100%" rows="5">
                                                    
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="laboratry">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text">If have any coments please mention here </h4>
                                                    <textarea name="laboratry_comment" style="width:100%" rows="5">

                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="comments">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text">If have any coments please mention here </h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea name = "comment" style="width:100%" rows="5">
                                                    
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                                
                                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='save' value='Save' />
                                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='submit' value='Submit' onclick="return confirm('Are you sure you want to submit &#128519');"/>
                                                
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

        
