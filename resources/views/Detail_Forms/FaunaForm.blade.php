<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body><br>
    <table class="table">
    <tr>
        <td>

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
   <td> 
    
    @if($ray==13)
        <h2 style="text-align: center"><b>  Poison : Bee, Wasp, Hornet Stings </b></h2><br>
         @elseif($ray==14)
         <h2 style="text-align: center"><b> Poison : Black Widow Spider  </b></h2><br>
         @elseif($ray==21)
         <h2 style="text-align: center"><b> Poison : Blister Beetle Ingestion </b></h2><br>
         @elseif($ray==15)
        <h2 style="text-align: center"><b>  Poison : Centipede Bite </b></h2><br>
         @elseif($ray==16)
        <h2 style="text-align: center"><b>   Poison : Jelly Fish </b></h2><br>
         @elseif($ray==17)
        <h2 style="text-align: center"><b>   Poison : Scorpion Bite  </b></h2><br>
         @elseif($ray==18)
         <h2 style="text-align: center"><b>  Poison : Snake bite  </b></h2><br>
         @elseif($ray==19)
         <h2 style="text-align: center"><b> Poison : Turtle Flesh Poison  </b></h2><br>
         @elseif($ray==20)
        <h2 style="text-align: center"><b> Poison : Unknown Bite </b></h2><br>
         @endif 
      </td>
      
    <td>
     <h3 style="text-align: center"><b> Category : Natural Toxins - Fauna   </b></h3><br>
    </td>
</tr>
    </table>
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

                <table class="table">
                    <tr>
                        <td>
                            <label> 01) First Name :</label>
                        <input type="text" name="Fname" required="true"  value ="{{$request->Fname}}"  >       
                 <br>
                 <label> 03) NIC Number :</label>
                        <input type="text" name="nic" value ="{{$request->nic}}" >  
                 <br>
                 <label> 05) Birth Date :</label>
                         <input type = "date" name = "Bdate" id="datePickerId"  value ="{{$request->Bdate}}" >
                 <br>
                 
               
                          <label> 07) Address:</label><br>
                          <textarea rows = "1" cols = "50" placeholder="Enter address here" name = "address" >{{$request->address}}</textarea>
       </td>
       <td>
             
                    <label> 02) Second Name :</label>
                        <input type="text" name="Sname"  value ="{{$request->Sname}}" >          
                <br>
                <label> 04) PHN Number :</label>
                        <input type="text" name="PHN" value ="{{$request->PHN}}">  
                <br>
                 <label> 06) Contact Number :</label>
                         <input type = "text" name = "Cno" value ="{{$request->Cno}}"  >
                 <br> 
                
                <label> 08) Gender :</label>
                 <input type="text" name="gender" value ="{{$request->gender}}">  
                        
               <br> 
                </td>
                    </tr>
                </table>
            </div>
      
         <form action="/submitFauna" method="post">	
     @csrf      
        <div data-panel="two">
	        <h4>Poison Detail</h4>
                <table class="table">
                    <tr>
                        <td>
                             
                <label> 01) Date : 
                   <input type = "date" name = "date" id="datePickerId"  >
                </label>  <br>
                              
                <label> 02) Time  : 
                   <input type = "time" name = "time" >
                </label>  <br>
               
                <label>03) Region :
                    <span class = "select">
                        <select name = "area">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Chankanai"> Chankanai </option>
                            <option value = "Chavakachcheri"> Chavakachcheri  </option>
                            <option value = "Delft"> Delft  </option>
                            <option value = "Jaffna"> Jaffna  </option>
                            <option value = "Karainagar"> Karainagar  </option>
                            <option value = "Karaveddy"> Karaveddy  </option>
                            <option value = "Kayts"> Kayts  </option>
                            <option value = "Kopay"> Kopay  </option>
                            <option value = "Maruthankerney"> Maruthankerney  </option>
                            <option value = "Nallur"> Nallur  </option>
                            <option value = "Point Pedro"> Point Pedro  </option>
                            <option value = "Sandilipay"> Sandilipay  </option>
                            <option value = "Tellippalai"> Tellippalail  </option>
                            <option value = "Uduvil"> Uduvil  </option>
                            <option value = "Velanai"> Velanai  </option>
                             <option value = "Outside Jaffna District"> Outside Jaffna District </option>
                        </select>
                    </span>
               </label>   <br>
                          
            
               <label> 04) Place of bite/sting :
                      <span class = "select">
                        <select name = "place_of_sting">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Forest"> Forest </option>
                            <option value = "Garden"> Garden  </option>
                            <option value = "Indoor"> Indoor </option>
                            <option value = "Paddy-field"> Paddy-field </option>
                            <option value = "Road"> Road </option>
                            <option value = "Roots"> Roots </option>
                            <option value = "Unutilized land"> Unutilized land </option>
                        </select>
                
           
                          </td>

                        <td>
              <label>05) Circumstances of stings/bite : 
                   <span class = "select">
                        <select name = "circumstance">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Provoked">  Provoked   </option>
                            <option value = "Unprovoked"> Unprovoked </option>
                        </select>
                    </span>
               </label>
            <br>
        <br>     
         
                 <label>06) Bite site/Sting site : 
                   <span class = "select">
                        <select name = "sting_site">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Abdomen"> Abdomen </option>
                            <option value = "Foot & ankle"> Foot & ankle </option>
                            <option value = "Head & Neck">  Head & Neck   </option>
                            <option value = "Leg"> Leg </option>
                            <option value = "Upper Limb"> Upper Limb </option>
                        </select>
                    </span>
              
 <br>
        
       
                <label> 07) Number of sting :
                   <input type="number" min="0" name="number_of_stings" />
                </label>
        <br>
         
                        </td>

                    </tr>
                </table>
   </div>
     
     
    <div data-panel="three">
          <h4>Clinical Feature</h4>
                @if($ray==13)
  <table>
  <td>                 
 <label><input type="checkbox" name ="AththanaClinical[]"   value="14"  >  Bronchospasm </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"    value="165" >  Burning pain  </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"   value="53" >  Facial oedema  </label><br>
 <label><input type="checkbox" name ="AththanaClinical[]"    value="34" >  Diarrhoea  </label><br>  
 <label><input type="checkbox" name ="AththanaClinical[]"   value="74" >  Hypotension </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"    value="81" >  Laryngeal oedema  </label><br>  
 <label><input type="checkbox" name ="AththanaClinical[]"   value="82"  >  Malaise </label><br>    
 <label><input type="checkbox" name ="AththanaClinical[]"   value="89" >  Nausea  </label><br>
 <label><input type="checkbox" name ="AththanaClinical[]"   value="98" >  	Oliguria </label><br> 
 </td>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                           <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                      <td>
 <label><input type="checkbox" name ="AththanaClinical[]"    value="110" >  Pruritus </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"   value="114"  >  Renal failure </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"   value="121" >   Rhabdomyolysis </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"    value="259" > Seizures  </label><br>  
 <label><input type="checkbox" name ="AththanaClinical[]"   value="166"  >  Serum sickness </label><br>  
 <label><input type="checkbox" name ="AththanaClinical[]"   value="131"  >  Swelling </label><br>  
 <label><input type="checkbox" name ="AththanaClinical[]"   value="137" >  Tightness of chest  </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"    value="140" >  Urticaria  </label><br> 
 <label><input type="checkbox" name ="AththanaClinical[]"   value="144"  >  Vomiting </label><br>   
</td>
                    </table>
  <br>
  If others :<br>
 <textarea rows = "2" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
  


@elseif($ray==14)
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain<br></label></label> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="170"  > Coagulopathy </label><br> 
						 <label><input type="checkbox" name ="AththanaClinical[]" value="163"> Convulsions </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="171"> Cramping truncal pain </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="169" > Haemoglobinuria </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="173" > Headache </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="175"  > Hyperaesthesia </label><br>						 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="157"  > Hypertension </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="54"> Fever </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="167" > Local necrosis </label><br>	
					         <label><input type="checkbox" name = "AththanaClinical[]" value="172" > Muscle spasm </label><br>	
						 <label><input type="checkbox" name ="AththanaClinical[]"   value="89" > Nausea  </label><br> 

						
        
                          <label11>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="101">	Pain </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="176"> Ptosis </label>	<br>						 
						 <label><input type="checkbox" name ="AththanaClinical[]" value="114">	Renal failure </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="118"  > Restlessness </label><br>
                                                 <label><input type="checkbox" name ="AththanaClinical[]" value="124">	Salivation  </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="168" > Scarlatiniform rash </label><br> 
						 <label><input type="checkbox" name ="AththanaClinical[]"    value="130" > Sweating </label><br>
                                                 <label><input type="checkbox" name = "AththanaClinical[]" value="131"  > Swelling </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="174" > Tachypnoea </label><br>						  
						 <label><input type="checkbox" name ="AththanaClinical[]"    value="140" > Urticaria </label><br>  
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="144"> Vomiting </label><br> 
					         <label><input type="checkbox" name ="AththanaClinical[]" value="146"> Weakness </label><br>
					        

						 
						 </label11> 
                                                 <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>	
                     @elseif($ray==21)
                    <br><label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain<br></label></label> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="17"  > Burning sensation of mouth </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="376"  > Cardiac abnormalities </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"    value="380" > Cranial nerve palsy </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="367" > Dark coloured urine </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="359"> Disseminated intravascular coagulation</label><br>						 
						 <label><input type="checkbox" name ="AththanaClinical[]" value="44"> Dysphagia </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"   value="371" > Dysuria  </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="370" > Gross haematuria </label><br>	
						 <label><input type="checkbox" name ="AththanaClinical[]" value="59"> Haematemesis </label><br>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="337"  > Haemorrhage</label><br>
						 
                          <label11>               
                        <label><input type="checkbox" name ="AththanaClinical[]" value="383">	Keratoconjunctivitis  </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="372">	Mucosal erosion </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="89" > Nausea </label><br>
						  <label><input type="checkbox" name = "AththanaClinical[]" value="378" > Occult rectal bleeding </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="382" > Periorbital dermatitis</label><br>	
						 <label><input type="checkbox" name ="AththanaClinical[]" value="375">	Priapism </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="381"  > Progressive muscle weakness</label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="373"> Renal dysfunction</label>	<br>	
						 <label><input type="checkbox" name = "AththanaClinical[]" value="117" > Respiratory failure </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="125"  > Seizure </label><br>	
						 <label><input type="checkbox" name ="AththanaClinical[]" value="377">	Vaginal bleeding  </label> <br>
		 
						 </label11> 
                                                 <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                      @elseif($ray==15)
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="101"> Pain<br></label></label> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="177"  > Redness</label><br>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="131"  > Swelling</label>
                        <br><br><br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                       @elseif($ray==16)
                       
                         <br><label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain<br></label></label> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="183" > Anaphylactoid </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="186">	Arthralgia </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="197">	Ataxia </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="165">	Burning pain </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="18"  > Cardiac arrhythmias </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="193">	Chills </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="21"  > Coma </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="29" > Cyanosis</label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="192"  > Desquamation </label><br>	
						 <label><input type="checkbox" name = "AththanaClinical[]" value="34" > Diarrhoea </label><br>
						 

					
                          <label11>               
                         <label><input type="checkbox" name = "AththanaClinical[]" value="189"> Erythematous papular lesion </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="54"> Fever </label><br>	
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="188"> Hemolysis</label>	<br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="74"> Hypotension </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="187"> Local oedema</label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="172">	Muscle spasm  </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="185" > Myalgia</label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="89" > Nausea </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="182" > Paraesthesia </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="113" > Pulmonary oedema  </label><br> 
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="181">	Rash </label><br>
						
                        

			</label11>
                                                 
                         <label13> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="125" > Seizure </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="180" > Shooting pain </label><br>	
						 <label><input type="checkbox" name = "AththanaClinical[]" value="178" > Stinging </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="179" > Throbbing</label><br>						 
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="144"> Vomiting </label><br>
                         </label13>                         
                                                 
                                                 <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                      @elseif($ray==17)
                       
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="5"> Anaphylaxis<br></label></label> 
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="165">	Burning pain </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="355">	Ecchymoses </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="207">	Lymphangitis </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="131" > Swelling </label><br>
                           <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>    
                     
                     @elseif($ray==18)
                       
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain<br></label>
                         <label><input type="checkbox" name = "AththanaClinical[]" value="2" > Acute renal failure  </label><br>
                         <label><input type="checkbox" name = "AththanaClinical[]" value="208" > Blisters </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="359" > Disseminated intravascular coagulation </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="248" > Hematuria </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="354" > Hemoglobinuria </label><br>
                         <label><input type="checkbox" name ="AththanaClinical[]"  value="74">	Hypotension </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="167"  > Local necrosis </label><br>
                         <label><input type="checkbox" name = "AththanaClinical[]" value="98" > Oliguria </label><br>
                         <label><input type="checkbox" name ="AththanaClinical[]"  value="101"> Pain </label> <br>
                         <label><input type="checkbox" name = "AththanaClinical[]" value="336" > Proteinuria </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="121" > Rhabdomyolysis </label><br>
                                                  
						 
						 	
						 
                                                 <label11>
                                                 <label><input type="checkbox" name = "AththanaClinical[]" value="131"  > Swelling </label><br>
                                                  <label><input type="checkbox" name ="AththanaClinical[]"  value="144"> Vomiting </label> <br><br>
                                                  
                                                  <b>Haematological</b><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="278" > Blood stained vomitus </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="355">	Ecchymoses </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="330">	Gum bleeding </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="335" > Intracranial haemorrhages  </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="298" > Melaena </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="324" > Per rectal bleeding  </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="247" > Purpura</label><br>
						 <br>
						 </label11>
                                                 
                                                  
					
                                                 <label13>
                                                 <b>Neurological manifestations</b><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="210"> Areflexia </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="213"> Double vision</label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="41" > Drowsiness </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="44">	Dysphagia</label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="214">	External ophthalmoplegia </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="209"> Facial muscle weakness </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="176" > Ptosis</label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="211"> Respiratory paralysis</label>	<br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="212"> Visual disturbances </label><br>
						 <br>
						</label13>
						 
						 
           <br> If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>    
                     						 
                     @elseif($ray==19)
                       
					     <label><input type="checkbox" name ="AththanaClinical[]"  value="364">	Burning sensation of lips </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="17"> Burning sensation of mouth<br></label></label>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="349">	Burning sensation of throat </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="363">	Cold extremities </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="21" > Coma </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="163">	Convulsions </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="41">	Drowsiness </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="47"  > Epigastric pain </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="89">	Nausea </label> <br>
						 
						 <label11>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="365"  > Pustular papillae </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="117"  > Respiratory failure </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="300"  > Stomatitis</label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="130">	Sweating </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="132"> Tachycardia<br></label></label>
						 <label><input type="checkbox" name ="AththanaClinical[]"  value="366">	Ulcerg </label> <br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="360"  > Vertigo </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="144" > Vomiting </label><br>
						
						 </label11>
                                                 
                                                    <br> If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>    
						      @elseif($ray==20)
                      
                   <textarea rows = "13" cols = "150" name = "clinicals_others"  placeholder="Enter Clinical Features here "></textarea>
                       
            @endif
   
    </div>
		    
            
    <div data-panel="four">
			<h4> Managemnt Detail</h4>
                                        <table>
                           <td>         
                    <label><input type="checkbox" name = "management[]" value="2"  > Adrenaline </label> <br>
                     <label><input type="checkbox" name = "management[]" value="4"  >  Analgesics given </label> <br>
                     <label><input type="checkbox" name = "management[]" value="41" > Antacids </label> <br>
                     <label><input type="checkbox" name = "management[]" value="6"  > Anticonvulsants given </label> <br>  
                     <label><input type="checkbox" name = "management[]" value="8"  >  Antihistamine </label> <br> 
                     <label><input type="checkbox" name = "management[]" value="11" > Calcium gluconate given </label> <br>
		     <label><input type="checkbox" name = "management[]" value="16" > Gastric lavage </label> <br>  
                     <label><input type="checkbox" name = "management[]" value="33" > Hydrocortisone </label> <br>
		     <label><input type="checkbox" name = "management[]" value="36" > Hemodialysis </label> <br>
                          <label><input type="checkbox" name = "management[]" value="17" > Icepacks Applaid </label><br>   
                            <label><input type="checkbox" name = "management[]" value="40"  > Inotropic support </label> <br>
                       
					 
                   </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                           <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                             <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

                     <td>

                    
                            <label><input type="checkbox" name = "management[]" value="34"  > Nebulisation </label><br>
                            <label><input type="checkbox" name = "management[]" value="35"  > Peritoneal </label><br>                        
                            <label><input type="checkbox" name = "management[]" value="31"  > Rest the area of bite </label><br>      
                            <label><input type="checkbox" name = "management[]" value="26"  > Resuscitation </label> <br>
                            <label><input type="checkbox" name = "management[]" value="37"  > Tetanus prophylaxis </label> <br>
			    <label><input type="checkbox" name = "management[]" value="38"  > Topical steroids </label> <br>
			    <label><input type="checkbox" name = "management[]" value="30"  > Wound cleaning </label> <br>     
                                             <br>
                           </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                           <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                             <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                           
                        <td>

                        
                         <label> <b> AVS :</b> </label><br><br>
                            <label><input type="checkbox" name = "management[]" value="7"  > Anti snake venom serum(AVS) given </label><br>  
                             If yes, no of vials :  
                            <input type="number" name = "AVS" >
                         </label>
                                                 </td>
                 </table>

                        
                        <br>
                        If others : <br> 
                            <textarea rows = "2" cols = "120" name = "managements others"  placeholder="Enter other management detail here"></textarea>
                      
                        
                     
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
                        
                   
            @if($ray==13)
                 <input type="hidden" name="id" value="13" >
            @elseif($ray==14)     
                  <input type="hidden" name="id" value="14" >
            @elseif($ray==21)     
                  <input type="hidden" name="id" value="21" >
            @elseif($ray==15)     
                  <input type="hidden" name="id" value="15" >
            @elseif($ray==16)     
                  <input type="hidden" name="id" value="16" >
            @elseif($ray==17)     
                  <input type="hidden" name="id" value="17" >
            @elseif($ray==18)     
                  <input type="hidden" name="id" value="18" >
            @elseif($ray==19)     
                  <input type="hidden" name="id" value="19" >
            @elseif($ray==20)     
                  <input type="hidden" name="id" value="20" >
            @endif  
                           
            <button  type="reset" value=""  onclick="return confirm(&quot;Reset the data?&quot;)" >Reset</button> 
            <button type="submit" name ="save" onclick="return confirm(&quot;Save the data?&quot;)" value="save">Save</button>  
            <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit"> Save & Submit</button> 
    </div>
</form> 
              
	</div>
     
	<button onclick="doclick()" name="next" >next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
