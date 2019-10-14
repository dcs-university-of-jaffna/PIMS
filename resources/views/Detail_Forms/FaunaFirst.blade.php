<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="{{ asset('css/index1.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button></a>

<div class="form">
    <h2 style="text-align: center">  New Patient Detail </h2>
         <label><b> Category : Natural Toxins -Fauna  </b></label><br>
         @if($ray==1)
         <label><b> Poison : Bee, Wasp, Hornet Stings</b></label><br><br>
         @elseif($ray==2)
         <label><b> Poison : Black Widow Spider  </b></label><br><br>
         @elseif($ray==3)
         <label><b> Poison : Blister Beetle ingestion </b></label><br><br>
         @elseif($ray==4)
         <label><b> Poison : Centipede Bite </b></label><br><br>
         @elseif($ray==5)
         <label><b> Poison : Jelly Fish  </b></label><br><br>
         @elseif($ray==6)
         <label><b> Poison : Scorpion Bite</b></label><br><br>
         @elseif($ray==7)
         <label><b> Poison : Snake Bite </b></label><br><br>
         @elseif($ray==8)
         <label><b> Poison : Turtle Flesh Poisoning  </b></label><br><br>
         @elseif($ray==9)
         <label><b> Poison : Unknown Bite</b></label><br><br>
         @endif 
        
         <form action="/submit_fauna_first_page" method="post">	
            @csrf
            @if($ray==1)
                 <input type="hidden" name="id" value="1" >
            @elseif($ray==2)     
                  <input type="hidden" name="id" value="2" >
            @elseif($ray==3)     
                  <input type="hidden" name="id" value="3" >
            @elseif($ray==4)     
                  <input type="hidden" name="id" value="4" >
            @elseif($ray==5)     
                  <input type="hidden" name="id" value="5" >
            @elseif($ray==6)     
                  <input type="hidden" name="id" value="6" >
            @elseif($ray==7)     
                  <input type="hidden" name="id" value="7" >
            @elseif($ray==8)     
                  <input type="hidden" name="id" value="8" >
            @elseif($ray==9)     
                  <input type="hidden" name="id" value="9" >
            @endif      
                  
                <label><b>PHN Number :</b></label>
                <input type="text" name="PHN" required="true" required pattern="[0-9]{11}" >       
                <button >next</button>
         </form>
 
                          
            
</body>
</html>