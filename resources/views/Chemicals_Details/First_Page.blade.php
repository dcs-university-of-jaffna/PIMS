 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('firstpage/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('firstpage/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
		<a href="/home">
			<div class="logo-container">
			   <div class="logo">
				   <img src="{{asset('chemical/img/gettyimages-183881669-612x612.jpg')}}" style="weidth:80px;height:80px">
			   </div>
			   <div class="brand">
				   Go To Home
			   </div>
		   </div>
	   </a>

	<div class="container-contact11">
		<div class="wrap-contact11">
			<form class="contact11-form validate-form" action="{{URL('Chemicals_Details/submitted_phn')}}" method = "get">
				<span class="contact11-form-title">
					Verify Patient for 
					@if($id==1) 
						<label> Carbamate Insecticides </label> 
					@elseif($id==2) 
						<label> Chlorophenoxy Compounds </label>
					@elseif($id==3) 
						<label> Coumarins </label>
					@elseif($id==4) 
						<label> Dithiocarbamate </label>
					@elseif($id==5) 
						<label> Diuron </label>
					@elseif($id==6) 
						<label> Fipronil </label>
					@elseif($id==7) 
						<label> Glyphosate </label>
					@elseif($id==8) 
						<label> Imidacloprid </label>
					@elseif($id==9) 
						<label> Metaldehyde </label>
					@elseif($id==10) 
						<label> Methyl Bromide </label>
					@elseif($id==11) 
						<label> Nitrophends and Nitro Cresols </label>
					@elseif($id==12) 
						<label> Organochlorines </label>
					@elseif($id==13) 
						<label> Organophosphates </label>
					@elseif($id==14) 
						<label> Phosphides </label>
					@elseif($id==15) 
						<label> Propanil </label>
					@elseif($id==16) 
						<label> Pyrethrum and related compounds </label>
					@elseif($id==17) 
						<label> Thallium </label>
					@elseif($id==18) 
						<label> Thiocarbamates </label>
					@elseif($id==19) 
						<label> Triazenes and Triazoles </label>
					@elseif($id==20) 
						<label> Other pesticide poisoning </label>
					@endif
				</span>

				<label class="label-input11" for="phn">Enter Patient's PHN Number</label>
				<div class="wrap-input11">
					<input id="phn" class="input11" type="text" name="phn" pattern="[0-9]{11}" title = "Please enter only number" maxlength="11">
					<span class="focus-input11"></span>
				</div>
				  
				@if($id==1)
					<input type="hidden" name="id" value="1" >
				@elseif($id==2)     
					<input type="hidden" name="id" value="2" >
				@elseif($id==3)     
					<input type="hidden" name="id" value="3" >
				@elseif($id==4)     
					<input type="hidden" name="id" value="4" >
				@elseif($id==5)     
					<input type="hidden" name="id" value="5" >
				@elseif($id==6)     
					<input type="hidden" name="id" value="6" >
				@elseif($id==7)     
                  <input type="hidden" name="id" value="7" >
				@elseif($id==8)     
					<input type="hidden" name="id" value="8" >
				@elseif($id==9)     
					<input type="hidden" name="id" value="9" >
				@elseif($id==10)     
					<input type="hidden" name="id" value="10" > 
				@elseif($id==11)     
					<input type="hidden" name="id" value="11" >
				@elseif($id==12)     
					<input type="hidden" name="id" value="12" >
				@elseif($id==13)     
					<input type="hidden" name="id" value="13" >
				@elseif($id==14)     
					<input type="hidden" name="id" value="14" >
				@elseif($id==15)     
					<input type="hidden" name="id" value="15" > 
				@elseif($id==16)     
					<input type="hidden" name="id" value="16" >
				@elseif($id==17)     
					<input type="hidden" name="id" value="17" >
				@elseif($id==18)     
					<input type="hidden" name="id" value="18" > 
				@elseif($id==19)     
					<input type="hidden" name="id" value="19" >
				@elseif($id==20)     
					<input type="hidden" name="id" value="20" >
				@endif 

				<div class="container-contact11-form-btn">
					<button class="contact11-form-btn">
						Verify
					</button>
				</div>
			</form>

			<div class="contact11-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Hospital St, Jaffna, Sri Lanka
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+94 212 223 348
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Website
						</span>

						<span class="txt3">
							http://thjaffna.lk/
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('firstpage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('firstpage/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('firstpage/js/main.js')}}"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
