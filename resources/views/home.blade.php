<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                <a class="nav-link dropdown-toggle" href="/form" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Natural Toxins
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Fauna &nbsp;&nbsp;&nbsp;
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[13])}}">Bee, Wasp, Hornet
                                    Stings</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[14])}}">Black Widow
                                    Spider</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[21])}}">Blister Beetle
                                    Ingestion</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[15])}}">Centipede Bite</a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[16])}}">Jelly Fish</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[17])}}">Scorpion Bite</a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[18])}}">Snake bite</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[19])}}">Turtle Flesh
                                    Poison</a></li>
                            <li><a class="dropdown-item" href="{{url('/Fauna_detail_form',[20])}}">Unknown Bite</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Flora &nbsp;&nbsp;&nbsp;
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{url('/Flora_detail_form',[1])}}">Aththana </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[2])}}">Divikaduru </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[3]) }}">DiyaKaduru </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[4]) }}">Endaru </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[5]) }}">GodaKaduru </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[6]) }}">Habarala </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[7]) }}">Hondala</a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[8]) }}">Kaneru </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[9]) }}">Kepunkiriya</a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[10]) }}">Niyagala</a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[11]) }}">Olinda </a></li>
                            <li><a class="dropdown-item" href="{{ url('/Flora_detail_form',[12]) }}">Unknown plant
                                    poisoning</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Microbial Poison
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Botalism</a></li>
                            <li><a class="dropdown-item" href="#">Food Poisonings</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
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
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Pesticides
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/1" value="1"> Carbamate
                                    Insecticides </a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/2" value="2">Chlorophenoxy
                                    Compounds</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/3" value="3">Coumarins</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/4"
                                   value="4">Dithiocarbamate</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/5" value="5">Diuron</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/6" value="6">Fipronil</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/7" value="7">Glyphosate</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/8"
                                   value="8">Imidacloprid</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/9" value="9">Metaldehyde</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/10" value="10">Methyl
                                    Bromide</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/12" value="11">Nitrophends
                                    and Nitro Cresols</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/12" value="12">Organochlorines</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/13" value="13">Organophosphates</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/14"
                                   value="14">Phosphides</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/15" value="15">Propanil </a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/16" value="16">Pyrethrum and
                                    related compounds</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/17" value="17">Thallium</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/18" value="18">Thiocarbamates</a>
                            </li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/19" value="19">Triazenes and
                                    Triazoles</a></li>
                            <li><a class="dropdown-item" href="Chemicals_Details/First_Page/20" value="20">Other
                                    pesticide poisoning</a></li>
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
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
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
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown"
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

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    <ul class="nav navbar-nav navbar-right">
        @if(Auth::user()->userType   =='Admin')
            <li><a class="btn btn-outline-primary my-2 my-sm-0 nav-item"" href="{{ url('/userPermission') }}">Admin</a></li>&nbsp;
        @endif
        <li class="nav-item">
            <button class="btn btn-outline-primary my-2 my-sm-0" href="{{ route('logout') }}" class="nav-link"
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

<br><br>

<br><br>
<!------ start record ----------->


<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-start text-left mb-5">
            <div class="col-md-9" data-aos="fade" id="table_head">
            </div>
        </div>

        <div id="record_list"></div>

        <script>
            $(document).ready(function(){

                fetch_customer_data();

                function fetch_customer_data(query = '')
                {
                    $.ajax({
                        url:"{{ route('incident_search.action') }}",
                        method:'GET',
                        data:{query:query},
                        dataType:'json',
                        success:function(data)
                        {
                            $('#record_list').html(data.table_data);
                            $('#table_head').html(data.table_heading);

                        }
                    })
                }

                $(document).on('keyup', '#search_box', function(){
                    let query = $(this).val();
                    fetch_customer_data(query);

                });
            });

            function patient_selected()
            {
                location.href = "/home";
            }
        </script>


        <div class="row mt-5">
            <div class="col-md-12 text-center">

            </div>
        </div>
    </div>
</div>


<!------ end record ----------->


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="/Homepage/js/bootnavbar.js"></script>
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
