
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poison</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/poisonStyles.css">
    
    
</head>
<body>
  <br>

<div class="container">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PHN</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <form  action="/phnsearch" class="navbar-form navbar-left" method="POST">
      {{csrf_field()}}
        <div class="form-group">
          <input type="number" min="0" class="form-control" placeholder="Search" name = "phn" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
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
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>



  <div class="container">
      
    <h1 >Poison Details</h1>
  </div>
    
   
    <div class="container containeradd">
       
        <ul class="nav nav-tabs toggle">
          <li class="active"><a data-toggle="tab" href="#Natural_Toxins">Natural Toxins</a></li>
          <li><a data-toggle="tab" href="#Chemical">Chemical</a></li>
          <li><a data-toggle="tab" href="#Pharmaceutical">Pharmaceutical</a></li>
          <li><a data-toggle="tab" href="#Others">Others</a></li>
        </ul>
      
        <div class="tab-content">
          <div id="Natural_Toxins" class="tab-pane fade in active">

       <div class="row">
            
          <div class="column" style="background-color:rgb(245, 245, 245);">
          <h3>Fauna</h3> 
                 <ul class="font">
                    <li  ><a href="#">Snake bite</a><br></li>
                    <li><a href="#">Scorpion bite</a><br></li>
                    <li><a href="#">Jellyfish</a><br></li>
                    <li><a href="{{ url('/form') }}">Bee sting</a><br></li>
                    <li><a href="#">Hornet sting</a><br></li>
                    <li><a href="#">Wasp sting</a><br></li>
                    <li><a href="#">Black widow spider</a><br></li>
                    <li><a href="#">Blister beetle</a><br></li>
                    <li><a href="#">Centipede</a><br></li>
                    <li><a href="#">Turtle flesh poisoning</a><br></li>
                    <li><a href="#">Others</a><br></li>
                </ul>
           </div>
       <div class="column" style="background-color:rgb(235, 235, 235);">     
           <h3 >Flora</h3>
                <ul class="font">
                    <li><a href="#">Allary</a><br></li>
                    <li><a href="#">Aththana</a><br></li>
                    <li><a href="#">Aththe</a><br></li>
                    <li><a href="#">Karththigai</a><br></li>
                    <li><a href="#">Kepunkiriya</a><br></li>
                    <li><a href="#">Hondala</a><br></li>
                    <li><a href="#">Habarala</a><br></li>
                    <li><a href="#">Goda Kaduru</a><br></li>
                    <li><a href="#">Endana</a><br></li>
                    <li><a href="#">Diya Kadunu</a><br></li>
                    <li><a href="#">Others</a><br></li>
                </ul> 
           </div>
        <div class="column" style="background-color:rgb(245, 245, 245);">         
            
             <h3>Microbial Poison</h3>  
                <ul class="font">
                    <li><a href="#">Botalism</a></li>
                    <li><a href="#">Food poisonings</a></li>
                </ul>
        </div>

        <div class="column" style="background-color:rgb(235, 235, 235);">  
               
                <h3>Fungal Poison</h3>
                 <ul class="font">
                    <li><a href="#">Mushroom</a></li>
                 </ul>
            </div>  
              
                </div>   
          </div>
          <div id="Chemical" class="tab-pane fade">
            <h3>Chemical 2</h3>
            
          </div>
          <div id="Pharmaceutical" class="tab-pane fade">
            <h3>Pharmaceutical</h3>
            
          </div>
          <div id="Others" class="tab-pane fade">
            <h3>Others</h3>
            
          </div>
        </div>
      </div>
      
     

</body>
</html>
