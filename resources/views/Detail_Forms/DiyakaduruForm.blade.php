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
                    alert("Please save your detail before go to main menue");
                }
            </script> 
 
    @else
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn"><i class="fa fa-home"></i>Back</button></a>
     
    @endif 
    
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn" onclick="return confirm(&quot;Close the form..? unsaved data will be lost&quot;)"><i class="fa fa-close"></i>Close</button></a>

    
    <!-- partial:index.partial.html -->
<div class="form">
	<h2 style="text-align: center">Patient Detail(Diya kaduru Poison)</h2>
	 
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
                        <label>PHN Number : {{$patient1}}</label>
                                  
    </div>
        
             <form action="/submitDiyakaduru" method="post">	
            @csrf      
    <div data-panel="two">
			<h4>Poison Detail</h4>
                             
                 <label> 01) Date of ingestion : 
                    <span class = "input"><input type = "date" name = "date" ></span>
                </label>  
                 <br><br>        
                     
                <label> 02) Time of ingestion : 
                    <span class = "input"><input type = "time" name = "time" ></span>
                </label>
               <br><br>
               
               
                <label>03)Region of ingestion :
                        <input type="text" name="area" />
             </label>  
            <br><br>
  
            
            <label> 04) Part of plant :
                     <input type="text" name="plant_part" />
                </label>
            <br><br>
             
            <label> 05) Amount :
                     <input type="text" name="amount" />
                </label>
         
            <br><br>
              
              <label>06) Circumstance : 
                   <span class = "select">
                        <select name = "circumstance">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Accidental">  Accidental   </option>
                            <option value = "Sucidal"> Suicidal  </option>
                            <option value = "Homicidal"> Homicidal </option>
                             <option value = "Occupational"> Occupational </option>
                        </select>
                    </span>
                    
                </label>
            <br><br>
        <br>        
         
                 <label>07) Mode of poisoning : 
                   <span class = "select">
                        <select name = "poisoning_mode">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Contact">  Contact   </option>
                            <option value = "Ingestion"> Ingestion  </option>
                            <option value = "Inhalation"> Inhalation </option>
                             <option value = "Others"> Others </option>
                        </select>
                    </span>
                    
                </label> 
         
   </div>
                  
 
            
    <div data-panel="three">
			<h4>Clinical Features</h4>
			<table>  
                        <tr>
                            <td style="text-align:center">
                           
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="abdominal_pain"> Abdominal_pain</td>
                         
                         <td style="text-align: center;  position:relative ; left:5%">  
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="diarrhoea" >  Diarrhoea </td>
                          
                          <td style="text-align: center;  position: relative ; left:10%">
                           <input type="checkbox" name = "DiyakaduruClinical[]" value="numbness_and_burning_of_mouth">Numbness and burning of mouth </td>         
                            </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>  
                         <td style="text-align:center">
                          <input type="checkbox" name = "DiyakaduruClinical[]"  value="electrolytes_imbalance"> Electrolytes imbalance </td>    
                        
                       
                        
                        <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="nausea" >  Nausea </td>
                          
                        <td style="text-align: center;  position: relative ; left:10%">     
                        <input type="checkbox" name ="DiyakaduruClinical[]" value="vomiting"  >  Vomiting  </td>
                                                   </tr>
                        </table><br>
                            
                        <h5>CVS :</h5>
                         <table>
                          <tr>  
                         <td style="text-align:center">
                         <input type="checkbox" name = "DiyakaduruClinical[]" value="sinus_bradycardia">Sinus bradycardia </td>     
                       
                        
                        <td style="text-align: center;  position: relative ; left:20%"> 
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="slow_pulse" >Slow pulse </td>
                          
                        <td style="text-align: center;  position: relative ; left:40%">     
                        <input type="checkbox" name ="DiyakaduruClinical[]" value="hypotension"  > Hypotension </td>
                                                   </tr> </table>
 
                          <br>
                          
                           <h5>Cardiac Dysrrhythmias :</h5>
                           <table>
                          <tr>  
                         <td style="text-align:center">
                         <input type="checkbox" name = "DiyakaduruClinical[]" value="junctional_rhythms">Junctional rhythms </td>     
                       
                        
                        <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="hb" >1st & 2nd degree HB </td>
                          
                        <td style="text-align: center;  position: relative ; left:10%">     
                        <input type="checkbox" name ="DiyakaduruClinical[]" value="atrial_and_venticular_ectopics"> Atrial and venticular ectopics </td>
                                                   </tr> 
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <td style="text-align:center">
                         <input type="checkbox" name = "DiyakaduruClinical[]" value="sinoatrial_block">Sinoatrial_block </td>     
                       
                        
                        <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="checkbox" name = "DiyakaduruClinical[]"  value="ventricular_fibrillation" >Ventricular fibrillation </td>             
      </table>        <br><br>
                         <label> If others <br> 
                            <input type="text" name = "clinicals_others" >
                         </label>
                          

    </div>
		
                   
            
            <div data-panel="four">
			<h4> Managemnt Detail</h4>
                                       <table>  
                           <tr>
                                 <td style="text-align:center">       
                                <input type="checkbox" name = "management[]" value="resuscitation"  > Resuscitation</td>
                         
                                <td style="text-align: center;  position:relative ; left:5%">
                                <input type="checkbox" name = "management[]" value="supportive_therapy"  > Supportive therapy </td>
                          
                                <td style="text-align: center;  position: relative ; left:10%">
                                <input type="checkbox" name = "management[]" value="anticonvulsants_given"  > Anticonvulsants given  </td>
                           </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                           <tr>
                               <td style="text-align:center">
                               <input type="checkbox" name = "management[]" value="atropine_given"  >  Atropine given </td>
                        
                               <td style="text-align: center;  position: relative ; left:5%"> 
                               <input type="checkbox" name = "management[]" value="dialysis"   > Dialysis</td>
                           
                               <td style="text-align: center;  position: relative ; left:10%"> 
                               <input type="checkbox" name = "management[]" value="alkalinization"  >  Alkalinization </td>
                           </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                              
                        <tr>
                            <td style="text-align:center">     
                            <input type="checkbox" name = "management[]" value="blood_transfusion"  > Blood transfusion/Plasma expanders </td>
                    
                            <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox" name = "management[]" value="nahco3_given"  >  NaHCO3 given </td>
                             
                            <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox" name = "management[]" value="dopamine"  >  Dopamine given </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                         <tr>
                            <td style="text-align:center">     
                            <input type="checkbox" name = "management[]" value="analgesics_given"  >  Analgesics given </td>
                        
                            <td style="text-align: center;  position: relative ; left:5%"> 
                            <input type="checkbox" name = "management[]" value="calcium_gluconate_given"   > Calcium gluconate given</td>
                        
                            <td style="text-align: center;  position: relative ; left:10%"> 
                            <input type="checkbox" name = "management[]" value="antibiotics_given"  > Antibiotics given </td>
                        </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                              
                        <tr>
                            <td style="text-align:center">     
                            <input type="checkbox" name = "management[]" value="prednisalone_given"  > prednisalone given </td>
                    
                            <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox" name = "management[]" value="nacl_given">  NaCl given </td>
                             
                            <td style="text-align: center;  position: relative ; left:10%">
                             <input type="checkbox" name = "management[]" value="methylprednisalone"  >  methylprednisolone/corticosteroids </td>
                         </tr>
                         
                        </table>
                        
                        <br><br>
                        <label> If others <br> 
                            <input type="text" name = "managements_others" size="55">
                        </label><br><br>
                        
                        <label> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <label>  Gastric aspiration & lavage : </label>
                                 <span class = "select">
                        <select name = "Gastric_aspiration">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "gastric_aspiration">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                         
                         
                         <label>  Activated chracol : </label>
                                 <span class = "select">
                        <select name = "charcoal">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "activated_chracol">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                        <label> If yes, no of does  <br> 
                            <input type="number" min="0" name = "activated_chracol_doses" >
                         </label>
                         <br><br>
                         
                         <label> <b> Antidote given :</b> </label>
                                 <span class = "select">
                        <select name = "antidote_given">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "antidote_given">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                          <label> If yes, type of antidote  <br> 
                            <input type="text" name = "antidote" >
                         </label>
                         
  
                          
		</div>
             
		<div data-panel="five">
			<h4>Laboratory Detail</h4>
			<input type="text" placeholder="laboratory detail" />
		</div>
		<div data-panel="six">
			<h4>Save/Submit</h4>
                         <label> Comment: <br> 
			<input type="text" name="comments" placeholder="Enter Comments here" />
                         </label>
                        <input type="hidden" name="PHNid" value="{{$patient2}}">
                           <button type="submit" name ="save" value="save">save</button>  
                           
                           <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit"> save & submit</button> 
		</div>
</form> 
              
	</div>
        
	<button onclick="doclick()" name="next" id="btn_hide" >next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>

