<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="/Homepage/css/bootnavbar.css">

    <title>PIMS</title>
    <meta name="description" content="Multi level hover dropdown Navbar for bootstrap 4">
    <meta name="keywords" content="Multi level hover dropdown Navbar for bootstrap 4">
 
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
  
  

    <link rel="stylesheet" href="/record_details/css/style.css">
  

</head>

<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
        <a class="navbar-brand" href="#">PIMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/form" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Natural Toxins
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                     Fauna &nbsp;&nbsp;&nbsp;
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Bee Sting</a></li>
                                    <li><a class="dropdown-item" href="#">Black widow spider</a></li>  
                                    <li><a class="dropdown-item" href="#">Blister beetle</a></li> 
                                    <li><a class="dropdown-item" href="#">Centipede</a></li> 
                                    <li><a class="dropdown-item" href="#">Hornet sting</a></li> 
                                    <li><a class="dropdown-item" href="#">Jellyfish</a></li> 
                                    <li><a class="dropdown-item" href="#">Snake bite</a></li> 
                                    <li><a class="dropdown-item" href="#">Scorpion bite</a></li> 
                                    <li><a class="dropdown-item" href="#">Turtle flesh poisoning</a></li> 
                                    <li><a class="dropdown-item" href="#">Wasp sting</a></li> 
                                    <li><a class="dropdown-item" href="#">Others</a></li> 
                    
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                     Flora &nbsp;&nbsp;&nbsp;
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                     <li><a class="dropdown-item" href="{{url('/Flora_detail_form',[1])}}">Aththana (Datura stramonium)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[2])}}">Divikaduru (Tabernaemantana dichotoma)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[3]) }}">DiyaKaduru (Cerebra manghas)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[4]) }}">Endaru (Ricinus communis)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[5]) }}">GodaKaduru (Stvychnos nuxvomica )</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[6]) }}">Habarala (Alocasia macromhiza)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[7]) }}">Hondala(Adenia Hondola)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[8]) }}">Kaneru (Nerium oleandor/Thevetia peruviana)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[9]) }}">Kepunkiriya (Euphorbia hirita)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[10]) }}">Niyagala (Gloriosa superba)</a></li>
                                     <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[11]) }}">Olinda (Abrus precatorius)</a></li>
                                     <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[12]) }}">Unknown plant poisoning</a></li>
                   
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Microbial Poison
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Botalism</a></li>
                                    <li><a class="dropdown-item" href="#">Food Poisonings</a></li>   
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Fungal Poison
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Mushroom</a></li>  
                                </ul>
                            </li>

                    </ul>
                </li>
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Chemical
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Pesticides
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page"> Carbamate Insecticides </a></li>
                            <li><a class="dropdown-item" href="#">Chlorophenoxy Compounds</a></li>   
                            <li><a class="dropdown-item" href="#">Coumarins</a></li>   
                            <li><a class="dropdown-item" href="#">Dithiocarbamate</a></li>   
                            <li><a class="dropdown-item" href="#">Diuron</a></li>   
                            <li><a class="dropdown-item" href="#">Fipronil</a></li>   
                            <li><a class="dropdown-item" href="#">Glyphosate</a></li>   
                            <li><a class="dropdown-item" href="#">Imidacloprid</a></li>   
                            <li><a class="dropdown-item" href="#">Metaldehyde</a></li>   
                            <li><a class="dropdown-item" href="#">Methyl Bromide</a></li>   
                            <li><a class="dropdown-item" href="#">Nitrophends and Nitro Cresols</a></li>   
                            <li><a class="dropdown-item" href="#">Organochlorines</a></li>   
                            <li><a class="dropdown-item" href="#">Organophosphates</a></li>   
                            <li><a class="dropdown-item" href="#">Phosphides</a></li>   
                            <li><a class="dropdown-item" href="#">Propanil </a></li>   
                            <li><a class="dropdown-item" href="#">Pyrethrum and related compounds</a></li>   
                            <li><a class="dropdown-item" href="#">Thallium</a></li>   
                            <li><a class="dropdown-item" href="#">Thiocarbamates</a></li>   
                            <li><a class="dropdown-item" href="#">Triazenes and Triazoles</a></li>   
                            <li><a class="dropdown-item" href="#">Other pesticide poisoning</a></li>   
                        </ul>
                            </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pharmaceutical
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Pharmaceutical
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Pharmaceutical</a></li>
                                    <li><a class="dropdown-item" href="#">Pharmaceutical</a></li>   
                                </ul>
                            </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Others
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Others
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Others</a></li>
                                    <li><a class="dropdown-item" href="#">Others</a></li>   
                                </ul>
                            </li>
                    </ul>
                </li>




            </ul>
            
        </div>
           
         <form class="form-inline my-2 my-lg-0"  action="/phnsearch" method="POST">
         {{csrf_field()}}
                <input class="form-control mr-sm-2"  type="number" min="0" name = "phn" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    

       <ul class="nav navbar-nav navbar-right">
            @if(Auth::user()->userType   =='Admin')
              <li><a class ="btn btn-outline-primary my-2 my-sm-0" href="{{ url('/userPermission') }}">Admin</a></li>&nbsp;
              @endif
              <li class="nav-item"><button class="btn btn-outline-primary my-2 my-sm-0" href="{{ route('logout') }}"  class="nav-link"
                                                  onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                  Logout
                                     </button>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                </li>
      </ul>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </nav>
    
<br><br><br><br>
<!------ start record ----------->
 

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Recent Records</h2>
          </div>
         
        </div>

    @foreach($data as $value)
        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"> {{$value->patient->name}}.  </h2>
                 <div class="badge-wrap">
                  <span class="bg-primary text-white badge py-2 px-4">{{$value->patient->phn}}</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{$value->toxicity->name}}</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>{{$value->area}}</span></div>
               </div>
              </div>

              <div class="ml-auto">
                            <span> last update:{{$value->updated_at}}  </span>
                            <a href="/incidents/{{$value->id}}" class="btn btn-dark py-2">Update</a>
                        </div>
                    </div>
          @endforeach
         </div>
        </div>
    
      

        
      


      
        

      

     

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>    


    

<!------ end record ----------->


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="/Homepage/js/bootnavbar.js" ></script>
    <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>


  
 
  
  

  

  <script src="/record_details/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/record_details/js/jquery-ui.js"></script>
  <script src="/record_details/js/popper.min.js"></script>
  <script src="/record_details/js/owl.carousel.min.js"></script>
  <script src="/record_details/js/jquery.stellar.min.js"></script>
  <script src="/record_details/js/jquery.countdown.min.js"></script>
  <script src="/record_details/js/jquery.magnific-popup.min.js"></script>
  <script src="/record_details/js/bootstrap-datepicker.min.js"></script>
  <script src="/record_details/js/aos.js"></script>
  



</body>

</html>