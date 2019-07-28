<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Patient &mdash; record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="/record_details/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/record_details/css/bootstrap.min.css">
    <link rel="stylesheet" href="/record_details/css/magnific-popup.css">
    <link rel="stylesheet" href="/record_details/css/jquery-ui.css">
    <link rel="stylesheet" href="/record_details/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/record_details/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/record_details/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/record_details/css/animate.css">
    
    
    <link rel="stylesheet" href="/record_details/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/record_details/css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="/record_details/css/aos.css">

    <link rel="stylesheet" href="/record_details/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="/home" class="text-black h2 mb-0">Poison<strong>Details</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              @if(Auth::user()->position  =='Admin') 
                <li><a href="#">Admin</a></li>
                @endif  
                <li class="nav-item"><a href="{{ route('logout') }}"  class="nav-link"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="unit-5 overlay" style="">
      <div class="container text-center">
        <h2 class="mb-0">Patient Details</h2>
        <p class="mb-0 unit-6"><a href="index.html">PHN</a> <span class="sep">></span> <span>Patient name</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Bee String</h2>
                 <div class="badge-wrap">
                 <span class="bg-success text-white badge py-2 px-4">Instance Date</span>
                  <span class="bg-info text-white badge py-2 px-4">Doctor Name</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><p>Site.</p></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>Location</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">More</a>
              </div>
           </div>

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Snake Bite</h2>
                 <div class="badge-wrap">
                 
                  <span class="bg-success text-white badge py-2 px-4">Instance Date</span>
                  <span class="bg-info text-white badge py-2 px-4">Doctor Name</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"> <p>Site.</p></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>Location</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-danger rounded-circle btn-favorite active"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">More</a>
              </div>

           </div>
         </div>
        </div>


       

        

      


      </div>
    </div>    


    

    

   
  </div>

  <script src="/record_details/js/jquery-3.3.1.min.js"></script>
  <script src="/record_details/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/record_details/js/jquery-ui.js"></script>
  <script src="/record_details/js/popper.min.js"></script>
  <script src="/record_details/js/bootstrap.min.js"></script>
  <script src="/record_details/js/owl.carousel.min.js"></script>
  <script src="/record_details/js/jquery.stellar.min.js"></script>
  <script src="/record_details/js/jquery.countdown.min.js"></script>
  <script src="/record_details/js/jquery.magnific-popup.min.js"></script>
  <script src="/record_details/js/bootstrap-datepicker.min.js"></script>
  <script src="/record_details/js/aos.js"></script>
  

  <script src="/record_details/js/main.js"></script>
    
  </body>
</html>