<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @if($back==0)
        <button onclick="myFunction()" class="btn"><i class="fa fa-home"></i>Back</button>        
            <script>
                function myFunction() {
                    alert("Please save information that you entered before go to previous page");
                }
            </script> 
 
    @else
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn"><i class="fa fa-home"></i>Back</button></a>
     
    @endif 
    
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn" onclick="return confirm(&quot;Close the form..? unsaved data will be lost&quot;)"><i class="fa fa-close"></i>Close</button></a>
     @if($ray==1)
        <h2 style="text-align: center"><b>  Poison : Bee, Wasp, Hornet Stings </b></h2><br>
         @elseif($ray==2)
         <h2 style="text-align: center"><b> Poison : Black Widow Spider  </b></h2><br>
         @elseif($ray==3)
         <h2 style="text-align: center"><b> Poison : Blister Beetle Ingestion </b></h2><br>
         @elseif($ray==4)
        <h2 style="text-align: center"><b>  Poison : Centipede Bite </b></h2><br>
         @elseif($ray==5)
        <h2 style="text-align: center"><b>   Poison : Jelly Fish </b></h2><br>
         @elseif($ray==6)
        <h2 style="text-align: center"><b>   Poison : Scorpion Bite  </b></h2><br>
         @elseif($ray==7)
         <h2 style="text-align: center"><b>  Poison : Snake bite  </b></h2><br>
         @elseif($ray==8)
         <h2 style="text-align: center"><b> Poison : Turtle Flesh Poison  </b></h2><br>
         @elseif($ray==9)
        <h2 style="text-align: center"><b> Poison : Unknown Bite </b></h2><br>
         @endif 
         
    
     <h3 style="text-align: center"><b> Category : Natural Toxins - Fauna   </b></h3><br>
    <!-- partial:index.partial.html -->

    <div class="form">
    
        <input id="one" type="radio" name="stage" checked="checked" />
	<input id="two" type="radio" name="stage" />
	<input id="three" type="radio" name="stage" />
	<input id="four" type="radio" name="stage" />
	<input id="five" type="radio" name="stage" />
	<input id="six" type="radio" name="stage" />

	<div class="stages">
		<label for="one" title="Personal Deatil" >1</label>
		<label for="two" title="Poison Detail">2</label>
		<label for="three" title="Clinical Features">3</label>
		<label for="four" title="Managemnt Detail">4</label>
		<label for="five" title="Laboratory Detail">5</label>
		<label for="six" title="Save/Submit">6</label>
	</div>

	<span class="progress"><span></span></span>

	<div class="panels">
      
            <div data-panel="one">
		<h4>Personal Detail</h4>
                <label>PHN Number : {{$patient1}} </label>      
               
            </div>
        
      
        <div data-panel="two">
	        <h4>Poison Detail</h4>
        </div>                     
               
    <div data-panel="three">
          <h4>Clinical Feature</h4>
                
    </div>
		    
            
    <div data-panel="four">
			<h4> Managemnt Detail</h4>
                     
    </div>
             
    <div data-panel="five">
        <h4>Laboratory Detail</h4>
                   <textarea rows = "13" cols = "150" name = "Lab_Comments"  placeholder="Enter laboratory detail here "></textarea>
   </div>
     
     
    <div data-panel="six">
			<h4>Save/Submit</h4>
                            <label> Comment: <br> 
                                <textarea rows = "13" cols = "150" name = "comments"  placeholder="Enter comments here"></textarea>
                            </label>
                        <br><br>
                        
                        <input type="hidden" name="PHNid" value="{{$patient2}}">
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
                           
            <button  type="reset" value=""  onclick="return confirm(&quot;Reset the data?&quot;)" >Reset</button> 
            <button type="submit" name ="save" value="save">Save</button>  
            <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit"> Save & Submit</button> 
    </div>
</form> 
              
	</div>
        
	<button onclick="doclick()" name="next" id="btn_hide" style="position: absolute ; top:85%" >next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
