<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button></a>

<!-- partial:index.partial.html -->
<div class="form">
	<h2 style="text-align: center">Patient Detail(Aththana Poison)</h2>
	
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
   <form action="/submit" method="post">	
            @csrf
            
    <div data-panel="one">
			<h4>Personal Detail</h4>
                     
                        <label>PHN Number :</label>
                        <input type="number" name="PHN" required="true" min="0" maxlength="11"/>
                      
    </div>
        
                  
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
                           
                        <input type="checkbox" name = "AththanaClinical[]"  value="mydriasis" > Mydriasis</td>
                         
                         <td style="text-align: center;  position:relative ; left:20%">  
                        <input type="checkbox" name = "AththanaClinical[]"  value="cycloplegia" >  Cycloplegia </td>
                          
                          <td style="text-align: center;  position: relative ; left:40%"> 
                        <input type="checkbox" name = "AththanaClinical[]"  value="dry_mouth" > Dry mouth </td>
                            </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>  
                         <td style="text-align:center">
                        <input type="checkbox" name = "AththanaClinical[]"  value="tachycardia" >  Tachycardia </td>
                        
                        <td style="text-align: center;  position: relative ; left:20%"> 
                        <input type="checkbox" name = "AththanaClinical[]" value="fever"  >  Fever </td>
                          
                        <td style="text-align: center;  position: relative ; left:40%">
                        <input type="checkbox" name ="AththanaClinical[]" value=erythema  >  Erythema  </td>
                                                   </tr>
                        </table><br><br>
                            
                        <label> CNS effects : </label>
                                 <span class = "select">
                        <select name = "CNSeffects">
                            
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Agitation">  Agitation   </option>
                            <option value = "Combative"> Combative  </option>
                            <option value = "Confusion"> Confusion </option>
                             <option value = "disorientation">disorientation </option>
                        </select>
                    </span>  
                          <br><br>
              
                         <label> If others <br> 
                            <input type="text" name = "clinicals_others" >
                         </label>
                          <button type="submit">save</button>    

    </div>
	  </form> 	
                   
            
            <div data-panel="four">
			<h4> Managemnt Detail</h4>
                                       <table>  
                        <tr>
                            <td style="text-align:center">
                                <input type="hidden" name = "Resucitation" value="0" >        
                        <input type="checkbox" name = "Resucitation" value="1"  > Resuscitation</td>
                         
                         <td style="text-align: center;  position:relative ; left:5%"> 
                             
                             <input type="hidden" name = "Supportive therapy" value="0"  >
                             <input type="checkbox" name = "Supportive therapy" value="1"  > Supportive therapy </td>
                          
                          <td style="text-align: center;  position: relative ; left:10%">
                              <input type="hidden" name = "renal_rep_theraphy" value="0"  >
                        <input type="checkbox" name = "renal_rep_theraphy" value="1"  > Anticonvulsants given  </td>
                           </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                           <tr>
                            <td style="text-align:center">
                                
                                <input type="hidden" name = "Atropine Given" value="0"  > 
                        <input type="checkbox" name = "Atropine Given" value="1"  >  Atropine given </td>
                        
                           <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="hidden" name = "Dialysis" value="0"> 
                               <input type="checkbox" name = "Dialysis" value="1"   > Dialysis</td>
                           <td style="text-align: center;  position: relative ; left:10%"> 
                                <input type="hidden" name = "Alkalinzation" value="0"  >
                               <input type="checkbox" name = "Alkalinzation" value="1"  >  Alkalinization </td>
                             </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                              
                        <tr>
                            <td style="text-align:center">     
                       <input type="hidden" name = "Blood translation" value="0"  >         
                        <input type="checkbox" name = "Blood translation" value="1"  > Blood translation/Plasma expanders </td>
                    
                             <td style="text-align: center;  position: relative ; left:5%">
                                 <input type="hidden" name = "NaHCO3 given" value="0"  >
                        <input type="checkbox" name = "NaHCO3 given" value="1"  >  NaHCO3 given </td>
                             
                                <td style="text-align: center;  position: relative ; left:10%">
                                 <input type="hidden" name = "Dopamine " value="0"  >
                        <input type="checkbox" name = "Dopamine " value="1"  >  Dopamine given </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                           <tr>
                            <td style="text-align:center">
                                
                                <input type="hidden" name = "Analgesics given" value="0"  > 
                        <input type="checkbox" name = "Analgesics given" value="1"  >  Analgesics given </td>
                        
                           <td style="text-align: center;  position: relative ; left:5%"> 
                        <input type="hidden" name = "Calcium given" value="0"> 
                               <input type="checkbox" name = "Calcium given" value="1"   > Calcium given</td>
                           <td style="text-align: center;  position: relative ; left:10%"> 
                                <input type="hidden" name = "Antibiotics given" value="0"  >
                               <input type="checkbox" name = "Antibiotics given" value="1"  > Antibiotics given </td>
                             </tr>
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                              
                        <tr>
                            <td style="text-align:center">     
                       <input type="hidden" name = "prednisalone given" value="0"  >         
                        <input type="checkbox" name = "prednisalone given" value="1"  > prednisolone given </td>
                    
                             <td style="text-align: center;  position: relative ; left:5%">
                                 <input type="hidden" name = "NaCl given" value="0"  >
                        <input type="checkbox" name = "NaCl given" value="1"  >  NaCl given </td>
                             
                               <td style="text-align: center;  position: relative ; left:10%">
                                 <input type="hidden" name = "methylprednisolone" value="0"  >
                        <input type="checkbox" name = "methylprednisolone" value="1"  >  methylprednisolone/corticosteroids </td>
                         </tr>
                         
                        </table>
                        
                        <br><br>
                        <label> If others <br> 
                            <input type="text" name = "managements_others" size="55">
                        </label><br><br>
                        
                        <label> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <label>  Gastric aspiration & lavage : </label>
                                 <span class = "select">
                        <select name = "Gastric aspiration">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Agitation">  yes   </option>
                            <option value = "Combative"> no </option>
                        </select>
                    </span><br><br>
                         
                         
                         <label>  Activated chracol : </label>
                                 <span class = "select">
                        <select name = "charcoal">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Agitation">  yes   </option>
                            <option value = "Combative"> no </option>
                        </select>
                    </span><br><br>
                        <label> If yes, no of does  <br> 
                            <input type="number" name = "clinicals_others" >
                         </label>
                         <br><br>
                         
                         <label> <b> Antidote given :</b> </label>
                                 <span class = "select">
                        <select name = "Antidote">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Agitation">  yes   </option>
                            <option value = "Combative"> no </option>
                        </select>
                    </span><br><br>
                          <label> If yes, type of antidote  <br> 
                            <input type="number" name = "clinicals_others" >
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
                           
                         <button type="submit"class="btn btn-danger" title="Delete Atts 1S" onclick="return confirm(&quot;Submit the data?&quot;)">submit</button> 
		</div>

              
	</div>
        
	<button onclick="doclick()" name="next" id="btn_hide" >next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>