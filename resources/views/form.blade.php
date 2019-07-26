<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
	<h2>Bee Sting</h2>
	
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

            <div data-panel="one">
			
                     
			<h4>Personal deatail</h4>
                        <label>PHN Number :</label>
			<input type="number" name="PHN" />
                          
                    
		</div>
            
		<div data-panel="two">
			<h4>Sting detail</h4>
                        
                <label> 01) Time of Sting : 
                    <span class = "input"><input type = "time" name = "time" ></span>
                </label>
           
            <br><br>
          
               <label> 02) Number of Sting :
                    <span class = "input"><input type = "number" name = "number" min = "0" required></span>
                </label>
         
            <br><br>
        
                <label> 03) Place of Sting :
                    <span class = "select">
                        <select name = "Places">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Home"> Home </option>
                            <option value = "Garden">Garden  </option>
                            <option value = "Paddyfield"> Paddy field </option>
                            <option value = "Forest"> Forest</option>
                            
                            
                        </select>
                    </span>
                <br><br>
                        <label> Others <br> 
                            <input type="text" name = "text" size="55">
                        </label>
                
                </label>
           
            <br><br>
           
            
            <label> 04) Sting site :</label><br><br>
         
                <table>  
                         <td>  
                        <input type="checkbox" name = "checkboxS1"   > Head and Neck </td>
                         
                         <td style="text-align: center;  position: relative ; left:20%"> 
                        <input type="checkbox" name = "checkboxS2"   >  Upper_Limb </td>
                          
                          <td style="text-align: center;  position: relative ; left:40%"> 
                        <input type="checkbox" name = "checkboxS3"   > Chest </td>
                           
                             <td style="text-align: center;  position: relative ; left:60%"> 
                        <input type="checkbox" name = "checkboxS4"   > Abdomen    </td>
                          
                              <td style="text-align: center;  position: relative ; left:80%"> 
                        <input type="checkbox" name = "checkboxS5"   > Lower_Limb   </td>
                            
                              
               </table>
            <br>
                        <label> Others <br> 
                            <input type="text" name = "text" size="55">
                        </label>
                
                </label>
           
            <br><br>
  <br>
        
                <label>05) Circumstances of Stings : 
                   <span class = "select">
                        <select name = "provoke">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = " Provoked  ">  Provoked   </option>
                            <option value = "Unprovoked "> Unprovoked  </option>
                                           
                        </select>
                    </span>
                    
                </label>
            
            <br>
            <br>
                     </div>
        
            
		<div data-panel="three">
			<h4>Clinical Features</h4>
			<table>  
                        <tr>
                            <td style="text-align:center">
                        <input type="checkbox" name = "checkboxC1"   > Burning pain</td>
                         
                         <td style="text-align: center;  position:relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxC2"   >  Pruritus </td>
                          
                          <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxC3"   > Vomiting </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxC4"   >  Brochospasm </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                         
                           <tr>   <td style="text-align:center">
                        <input type="checkbox" name = "checkboxC5"   >  Renal failure </td>
                           <td style="text-align: center;  position: relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxC6"   >  Tightness of chest  </td>
                              <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxC3"   > Urteacaria </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxC4"   >  Rhabdomyolysis </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>   <td style="text-align:center">
                        <input type="checkbox" name = "checkboxC5"   >  Swelling </td>
                           <td style="text-align: center;  position: relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxC6"   >  Nausea  </td>
                              <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxC3"   > Hypotension </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxC4"   >  Oliguria </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                           <tr>  <td style="text-align:center">
                        <input type="checkbox" name = "checkboxC5"   > Diarrhoea </td>
                           <td style="text-align: center;  position: relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxC6"   >  Malaise  </td>
                              <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxC3"   > Facial odema </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxC4"   >  Seizure </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                          <tr>   <td>
                        <input type="checkbox" name = "checkboxC5"   >  Laryngeal odema </td>
                        
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
               </table>
                         <label> Others <br> 
                            <input type="text" name = "text" size="55">
                         </label><br><br>
                
          <label> <b>Features of anaphylaxis : </b>
                   <span class = "select">
                        <select name = "anaphylaxis">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = " Provoked  "> Present   </option>
                            <option value = "Unprovoked "> Absent  </option>
                                           
                        </select>
                   </span><br><br>
                    
                </label>

		</div>
		<div data-panel="four">
			<h4>Managemnt</h4>
                <table>  
                        <tr>
                            <td style="text-align:center">
                        <input type="checkbox" name = "checkboxM1"   > Apply ice</td>
                         
                         <td style="text-align: center;  position:relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxM2"   > Antiistamine </td>
                          
                          <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxM3"   > Adrenalin(IM) </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxM4"   >  ICU care </td>
                         </tr>
                         
                         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                         
                         
                           <tr>   <td style="text-align:center">
                        <input type="checkbox" name = "checkboxM5"   >  Steroids </td>
                           <td style="text-align: center;  position: relative ; left:25%"> 
                        <input type="checkbox" name = "checkboxM6"   >  Need Renal Replacement Theraphy  </td>
                              <td style="text-align: center;  position: relative ; left:50%"> 
                        <input type="checkbox" name = "checkboxM7"   > Need invasive ventiliation </td>
                           
                             <td style="text-align: center;  position: relative ; left:75%"> 
                        <input type="checkbox" name = "checkboxM8"   >  Stinger scrapped </td>
                         </tr>
                        </table>
                        
                        <br><br>
                        <label> If others <br> 
                            <input type="text" name = "text" size="55">
                        </label>
		</div>
		<div data-panel="five">
			<h4>laboratory detail</h4>
			<input type="text" placeholder="laboratory detail" />
		</div>
		<div data-panel="six">
			<h4>Stage 6</h4>
			<input type="text" placeholder="Comment" />
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

