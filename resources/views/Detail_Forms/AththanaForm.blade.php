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
                    alert("Please save your detail before go to previous page");
                }
            </script> 
 
    @else
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn"><i class="fa fa-home"></i>Back</button></a>
     
    @endif 
    
    <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn" onclick="return confirm(&quot;Close the form..? unsaved data will be lost&quot;)"><i class="fa fa-close"></i>Close</button></a>

    <h2 style="text-align: center">Patient Detail(Aththana Poison)</h2>
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
                        <label>PHN Number : {{$patient1}}</label>
                                  
    </div>
        
             <form action="/submitAththana" method="post">	
            @csrf      
    <div data-panel="two">
			<h4>Poison Detail</h4>
                             
                 <label1> 01) Date : 
                   <input type = "date" name = "date" >
                </label1>  
                      
                     
                <label2> 02) Time  : 
                   <input type = "time" name = "time" >
                </label2>
             
               
               
                <label3>03) Region :
                        <input type="text" name="area" />
             </label3>  
         
  
            
            <label4> 04) Part of plant :
                     <input type="text" name="plant_part" />
                </label4>
                        <br><br>
           
             
            <label5> 05) Amount :
                   <input type="number" min="0" name="amount" />
                </label5>
                         <br><br>
         
            <br><br>
              
              <label6>06) Circumstance : 
                   <span class = "select">
                        <select name = "circumstance">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Accidental">  Accidental   </option>
                            <option value = "Sucidal"> Suicidal  </option>
                            <option value = "Homicidal"> Homicidal </option>
                             <option value = "Occupational"> Occupational </option>
                        </select>
                    </span>
                    
                </label6>
            <br><br>
        <br>        
         
                 <label7>07) Mode of poisoning : 
                   <span class = "select">
                        <select name = "poisoning_mode">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Contact">  Contact   </option>
                            <option value = "Ingestion"> Ingestion  </option>
                            <option value = "Inhalation"> Inhalation </option>
                             <option value = "Others"> Others </option>
                        </select>
                    </span>
                    
                </label7> 
         
   </div>
                  
 
            
    <div data-panel="three">
			<h4>Clinical Features</h4>
			<table>  
                       
                         <tr><td>
                        <input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia</td></tr>
                          
                         <tr><td>
                        <input type="checkbox" name = "AththanaClinical[]"  value="42" > Dry mouth</td> </tr> 
                                    
                        <tr><td>
                        <input type="checkbox" name ="AththanaClinical[]" value="48"  >  Erythema</td> </tr>
                        
                        <tr><td>
                        <input type="checkbox" name = "AththanaClinical[]" value="54"  >  Fever</td> </tr>
                        
                        <tr> <td>
                            <input type="checkbox" name = "AththanaClinical[]"  value="86" > Mydriasis</td>
                         </tr>
                                     
                        <tr><td>
                        <input type="checkbox" name = "AththanaClinical[]"  value="132" >  Tachycardia</td></tr>
                                      
                        </table><br><br>
                            
                         <label4> 
                              CNS effects : 
                                 <span class = "select">
                        <select name = "CNSeffects">
                            
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "3">  Agitation   </option>
                            <option value = "22"> Combative  </option>
                            <option value = "23"> Confusion </option>
                             <option value = "38">disorientation </option>
                        </select>
                    </span> 
                         </label4>
                        
                        
                        <label8>If others :
                            <input type="text" name = "clinicals_others" >
                        </label8>
                          <br><br>
              
                        
                          

    </div>
		
                   
            
            <div data-panel="four">
			<h4> Managemnt Detail</h4>
                                       <table> 
                                           
                                             <tr>  <td > 
                               <input type="checkbox" name = "management[]" value="3"  >  Alkalinization </td>
                           </tr>
                           
                           <tr>   <td >     
                            <input type="checkbox" name = "management[]" value="4"  >  Analgesics given </td></tr>
                      
                           <tr> <td> 
                            <input type="checkbox" name = "management[]" value="5"  > Antibiotics given </td></tr>
                    
                           <tr>   <td >
                                <input type="checkbox" name = "management[]" value="6"  > Anticonvulsants given  </td></tr>
                         
                            <tr>
                               <td >
                               <input type="checkbox" name = "management[]" value="9"  >  Atropine given </td></tr>
                           
                             <tr>
                            <td >     
                            <input type="checkbox" name = "management[]" value="10"  > Blood transfusion/Plasma expanders </td></tr>
                           
                             <tr>  <td > 
                            <input type="checkbox" name = "management[]" value="11"   > Calcium gluconate given</td></tr>
                     
                              <tr>    <td > 
                               <input type="checkbox" name = "management[]" value="13"   > Dialysis</td></tr>
                           
                               <tr>  <td style="position:absolute ; left:40% ;top:35%" >
                            <input type="checkbox" name = "management[]" value="14"  >  Dopamine given </td>
                             </tr>
                             
                              <tr>  <td style="position:absolute ; left:40% ;top:39%">
                             <input type="checkbox" name = "management[]" value="20"  >  Methylprednisolone/Corticosteroids </td>
                             </tr>
                             
                              <tr>   <td style="position:absolute ; left:40% ;top:43%">
                            <input type="checkbox" name = "management[]" value="21">  NaCl given </td></tr>
                             
                              <tr>  <td style="position:absolute ; left:40% ;top:47%">
                            <input type="checkbox" name = "management[]" value="22"  >  NaHCO3 given </td></tr>
                             
                              <td style="position:absolute ; left:40% ;top:51%">     
                            <input type="checkbox" name = "management[]" value="24"  > Prednisalone given </td></tr>
                              
                           <tr>
                                 <td style="position:absolute ; left:40% ;top:55%">       
                                <input type="checkbox" name = "management[]" value="26"  > Resuscitation</td></tr>
                         
                           <tr>     <td style="position:absolute ; left:40% ;top:59%">
                                <input type="checkbox" name = "management[]" value="29"  > Supportive therapy </td></tr>
                          
                        </table>
                        
                        <br><br>
                        <label> If others <br> 
                            <input type="text" name = "managements others" size="55">
                        </label><br><br>
                        
                        <label9> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <label>  Gastric aspiration & lavage : </label>
                                 <span class = "select">
                        <select name = "Gastric_aspiration">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "15">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                         
                        <label> 
                          Activated chracol : 
                                 <span class = "select">
                        <select name = "charcoal">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "1">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                        If yes, no of does :  <br>
                            <input type="number" min="0" name = "activated_chracol_doses" >
                        </label>
                         <br><br><br>
                         
                         <label> <b> Antidote given :</b> </label>
                                 <span class = "select">
                        <select name = "antidote_given">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "7">  yes   </option>
                            <option value = ""> no </option>
                        </select>
                    </span><br><br>
                          <label> If yes, type of antidote :  <br> 
                            <input type="text" name = "antidote" >
                         </label9>
                         
  
                          
		</div>
             
		<div data-panel="five">
			<h4>Laboratory Detail</h4>
                         <textarea rows = "13" cols = "150" name = "description"  placeholder="laboratory detail">
         </textarea>
         
		</div>
		<div data-panel="six">
			<h4>Save/Submit</h4>
                         <label> Comment: <br> 
			<textarea rows = "13" cols = "150" name = "description"  placeholder="Enter comments">
         </textarea>
                         </label>
                        <br><br>
                        <input type="hidden" name="PHNid" value="{{$patient2}}">
                           <button type="submit" name ="save" value="save">save</button>  
                           
                           <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit"> save & submit</button> 
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
