<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
	<h2 style="text-align: center">Bee Sting Patient Detail</h2>
	
	<input id="one" type="radio" name="stage" checked="checked" />
	<input id="two" type="radio" name="stage" />
	<input id="three" type="radio" name="stage" />
	<input id="four" type="radio" name="stage" />
	<input id="five" type="radio" name="stage" />
	<input id="six" type="radio" name="stage" />

	<div class="stages">
		<label for="one">1</label>
		<label for="two">2</label>
		<label for="three">3</label>
		<label for="four">4</label>
		<label for="five">5</label>
		<label for="six">6</label>
	</div>

	<span class="progress"><span></span></span>

	<div class="panels">
   <form action="/submit" method="post">	
            @csrf
            
            <div data-panel="one">
			<h4>Personal deatail</h4>
                     
                        <label>PHN Number :</label>
                        <input type="number" name="PHN" required="true" min="0"/>
                           
	    </div>
            
                  
	    <div data-panel="two">
			<h4>Sting detail</h4>
                             
                 <label> 01) Date of Sting : 
                    <span class = "input"><input type = "date" name = "instance_date" ></span>
                </label>  
                 <br><br>        
                     
                <label> 02) Time of Sting : 
                    <span class = "input"><input type = "time" name = "Sting_Time" ></span>
                </label>
               <br><br>
                  
                                          
            <label> 03) Number of Sting :
                    <input type = "number" name = "number_of_stings" min="0"  >
                </label>
         
            <br><br>
            
              <label>04) Circumstances of Stings : 
                   <span class = "select">
                        <select name = "Cirmustance">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = " Provoked  ">  Provoked   </option>
                            <option value = "Unprovoked "> Unprovoked  </option>
                                           
                        </select>
                    </span>
                    
                </label>
            <br><br>
<br>        

  
             <label>05)Region of sting :
                        <input type="text" name="instance_area" />
             </label>  
<br><br>
  
               
            <label> 06) Place of Sting :
                    <span class = "select">
                        <select name = "Place_of_Sting">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Home"> Home </option>
                            <option value = "Garden">Garden  </option>
                            <option value = "Paddyfield"> Paddy field </option>
                            <option value = "Forest"> Forest</option>
                            
                            
                        </select>
                    </span>

                <br><br>
                        <label> Others <br> 
                            <input type="text" name = "other_places" size="55">
                        </label>
                
                </label>
                                
            <br><br>
           
            
            <label> 07) Sting site :</label><br><br>
         
                <table>  <tr>
                         <td>
                        <input type="hidden" name = "head_neck" value="0"   >    
                        <input type="checkbox" name = "head_neck" value="1"   > Head and Neck </td>
                         
                         <td style="text-align: center;  position: relative ; left:20%"> 
                             <input type="hidden" name = "upper_limb" value="0"  >
                             <input type="checkbox" name = "upper_limb" value="1"  >  Upper_Limb </td>
                          
                          <td style="text-align: center;  position: relative ; left:40%">
                        <input type="hidden" name = "chest"  value="0" >    
                        <input type="checkbox" name = "chest"  value="1" > Chest </td>
                          <tr>
                         </table>
            <br>
            <table> <tr>
                             <td style="text-align: center;  position: relative ; left:12%"> 
                        <input type="hidden" name = "abdomen" value="0"  >         
                        <input type="checkbox" name = "abdomen" value="1"  > Abdomen    </td>
                          
                              <td style="text-align: center;  position: relative ; left:53%"> 
                         <input type="hidden" name = "lower_limb" value="0"  >      
                        <input type="checkbox" name = "lower_limb" value="1"  > Lower_Limb   </td>
                           
                </tr></table>           
               
            <br>
                        <label> Others <br> 
                            <input type="text" name = "sites_others" >
                        </label>
                
                </label>
      
                     </div>
                  

            
		<div data-panel="three">
			<h4>Clinical Features</h4>
			<table>  
                        <tr>
                            <td style="text-align:center">
                                <input type="hidden" name = "burning_pain"  value="0" >
                        <input type="checkbox" name = "burning_pain"  value="1" > Burning pain</td>
                         
                         <td style="text-align: center;  position:relative ; left:20%"> 
                              <input type="hidden" name = "pruritus"  value="0" > 
                        <input type="checkbox" name = "pruritus"  value="1" >  Pruritus </td>
                          
                          <td style="text-align: center;  position: relative ; left:40%"> 
                              <input type="hidden" name = "vomiting"  value="0" >
                        <input type="checkbox" name = "vomiting"  value="1" > Vomiting </td>
                            </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>  
                         <td style="text-align:center">
                             <input type="hidden" name = "bronchospasm"  value="0" >
                        <input type="checkbox" name = "bronchospasm"  value="1" >  Brochospasm </td>
                        
                        <td style="text-align: center;  position: relative ; left:20%"> 
                             <input type="hidden" name = "renal_failure" value="0"  >
                        <input type="checkbox" name = "renal_failure" value="1"  >  Renal failure </td>
                          
                        <td style="text-align: center;  position: relative ; left:40%">
                             <input type="hidden" name = "tightness_of_chest" value="0"  >
                        <input type="checkbox" name = "tightness_of_chest" value="1"  >  Tightness of chest  </td>
                                                   </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
                             
                            <tr>
                            <td style="text-align:center">
                                 <input type="hidden" name = "urticaria" value="0"  >
                        <input type="checkbox" name = "urticaria" value="1"  > Urteacaria </td>

                             <td style="text-align: center;  position: relative ; left:20%"> 
                                  <input type="hidden" name = "rhabdomyolysis" value="0"  >
                        <input type="checkbox" name = "rhabdomyolysis" value="1"  >  Rhabdomyolysis </td>
       
                             <td style="text-align: center;  position: relative ; left:40%">
                                  <input type="hidden" name = "swelling" value="0"  >
                        <input type="checkbox" name = "swelling" value="1"  >  Swelling </td>
                           
                             </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>     
                              
                            <tr>  <td style="text-align:center">
                                    <input type="hidden" name = "nausea" value="0"  >
                        <input type="checkbox" name = "nausea" value="1"  >  Nausea  </td>
                              
                                <td style="text-align: center;  position: relative ; left:20%"> 
                                     <input type="hidden" name = "hypotension" value="0"  > 
                        <input type="checkbox" name = "hypotension" value="1"  > Hypotension </td>
                           
                             <td style="text-align: center;  position: relative ; left:40%"> 
                                  <input type="hidden" name = "oliguria"  value="0" >
                        <input type="checkbox" name = "oliguria"  value="1" >  Oliguria </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                               <tr>  <td style="text-align:center">
                             <input type="hidden" name = "diarrhoea" value="0"  >           
                        <input type="checkbox" name = "diarrhoea" value="1"  > Diarrhoea </td>
                           
                                   <td style="text-align: center;  position: relative ; left:20%"> 
                                        <input type="hidden" name = "malaise"  value="0" >
                        <input type="checkbox" name = "malaise"  value="1" >  Malaise  </td>
                              
                                   <td style="text-align: center;  position: relative ; left:40%"> 
                                       <input type="hidden" name = "facial_odema" value="0"  > 
                        <input type="checkbox" name = "facial_odema" value="1"  > Facial odema </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>  
                              <td style="text-align:center">
                                  <input type="hidden" name = "seizure" value="0"  >
                                  <input type="checkbox" name = "seizure" value="1"  >  Seizure </td>
                                
                              <td style="text-align: center;  position: relative ; left:20%"> 
                                     <input type="hidden" name = "laryngeal_odema" value="0"  >
                                     <input type="checkbox" name = "laryngeal_odema" value="1"  >  Laryngeal odema </td>
                        
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
               </table>
                         <label> Others <br> 
                            <input type="text" name = "clinicals_others" >
                         </label><br><br>
                
          <label> <b>Features of anaphylaxis : </b>
                   <span class = "select">
                        <select name = "anaphylaxis">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = " Present  "> Present   </option>
                            <option value = "Absent "> Absent  </option>
                                           
                        </select>
                   </span><br><br>
                    
                </label>

		</div>
		
                   
            
            <div data-panel="four">
			<h4>Managemnt</h4>
                <table>  
                        <tr>
                            <td style="text-align:center">
                                <input type="hidden" name = "ice_packs" value="0" >        
                        <input type="checkbox" name = "ice_packs" value="1"  > Apply ice</td>
                         
                         <td style="text-align: center;  position:relative ; left:5%"> 
                             
                             <input type="hidden" name = "antihistamine" value="0"  >
                             <input type="checkbox" name = "antihistamine" value="1"  > Antiistamine </td>
                          
                          <td style="text-align: center;  position: relative ; left:10%">
                              <input type="hidden" name = "renal_rep_theraphy" value="0"  >
                        <input type="checkbox" name = "renal_rep_theraphy" value="1"  >  Need Renal Replacement Theraphy  </td>
                           </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                           <tr>
                            <td style="text-align:center">
                                
                                <input type="hidden" name = "icu_care" value="0"  > 
                        <input type="checkbox" name = "icu_care" value="1"  >  ICU care </td>
                        
                           <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="hidden" name = "steroids" value="0"> 
                               <input type="checkbox" name = "steroids" value="1"   >  Steroids </td>
                           <td style="text-align: center;  position: relative ; left:10%"> 
                                <input type="hidden" name = "invasive_ventilation" value="0"  >
                               <input type="checkbox" name = "invasive_ventilation" value="1"  > Need invasive ventiliation </td>
                             </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                              
                        <tr>
                            <td style="text-align:center">     
                       <input type="hidden" name = "adrenaline" value="0"  >         
                        <input type="checkbox" name = "adrenaline" value="1"  > Adrenalin(IM) </td>
                    
                             <td style="text-align: center;  position: relative ; left:5%">
                                 <input type="hidden" name = "stinger_scrapped" value="0"  >
                        <input type="checkbox" name = "stinger_scrapped" value="1"  >  Stinger scrapped </td>
                         </tr>
                        </table>
                        
                        <br><br>
                        <label> If others <br> 
                            <input type="text" name = "managements_others" size="55">
                        </label>
                        
		</div>
             
		<div data-panel="five">
			<h4>laboratory detail</h4>
			<input type="text" placeholder="laboratory detail" />
		</div>
		<div data-panel="six">
			<h4>Stage 6</h4>
                        
			<input type="text" placeholder="Comment" />
                         <button type="submit">Save</button>  
		</div>
</form>
	</div>

	<button onclick="doclick()">Next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>

