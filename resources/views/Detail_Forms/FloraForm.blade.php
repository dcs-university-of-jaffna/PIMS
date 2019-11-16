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
     
    @if($ray==1)
        <h3><b>  Poison : Aththana (Datura stramonium)  </b></h3><br>
         @elseif($ray==2)
         <h2 style="text-align: center"><b> Poison : Divikaduru (Tabernaemantana dichotoma)  </b></h2><br>
         @elseif($ray==3)
         <h2 style="text-align: center"><b> Poison : DiyaKaduru (Cerebra manghas) </b></h2><br>
         @elseif($ray==4)
        <h2 style="text-align: center"><b>  Poison : Endaru (Ricinus communis)  </b></h2><br>
         @elseif($ray==5)
        <h2 style="text-align: center"><b>   Poison : GodaKaduru (Stvychnos nuxvomica )  </b></h2><br>
         @elseif($ray==6)
        <h2 style="text-align: center"><b>   Poison : Habarala (Alocasia macromhiza)  </b></h2><br>
         @elseif($ray==7)
         <h2 style="text-align: center"><b>  Poison : Hondala(Adenia Hondola)  </b></h2><br>
         @elseif($ray==8)
         <h2 style="text-align: center"><b> Poison : Kaneru (Nerium oleandor/Thevetia peruviana)  </b></h2><br>
         @elseif($ray==9)
        <h2 style="text-align: center"><b> Poison : Kepunkiriya (Euphorbia hirita) </b></h2><br>
         @elseif($ray==10)
         <h2 style="text-align: center"><b>  Poison : Niyagala (Gloriosa superba) </b></h2><br>
         @elseif($ray==11)
          <h2 style="text-align: center"><b> Poison : Olinda (Abrus precatorius)  </b></h2><br>
         @elseif($ray==12)
         <h2 style="text-align: center"><b>  Poison : Unknown plant poisoning  </b></h2><br>
         @endif
</td>

<td>
     <h3 style="text-align: center"><b> Category : Natural Toxins - Flora   </b></h3><br>
     <td></tr></table>
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
<form action="/submitFlora" method="post">
     @csrf
     <div data-panel="one">
           
		<h4>Personal Detail</h4>
                
    <table class="table">
        <tr>
            <td>
             <label> 01) First Name :</label>
                        <input type="text" name="Fname" required="true" value ="{{$request->Fname}}" >       
                 <br>
                 <label> 03) NIC Number :</label>
                        <input type="text" name="nic" value ="{{$request->nic}}" >  
                 <br>
                 <label> 05) Birth Date :</label>
                         <input type = "date" name = "Bdate" id="datePickerId" value ="{{$request->Bdate}}" >
                 <br>
                
                <label> 07) Address:</label><br>
                <input type = "text" name = "address"  value ="{{$request->address}}" >
                 <br> 
                 
                
            </td>
            
            <td>
            <label> 02) Second Name :</label>
                        <input type="text" name="Sname" value ="{{$request->Sname}}" >          
                <br>
                <label> 04) PHN Number :</label>
                        <input type="text" name="PHN" value ="{{$request->PHN}}" >  
                <br>
                 <label> 06)  Contact Number :</label>
                         <input type = "text" name = "Cno" value ="{{$request->Cno}}"  >
                 <br> 
                
                 <label>08) Gender  :<br>
                    <span class = "select">
               <select name = "gender" class="form-control">
           <option  value="{{$request->gender}}">{{$request->gender}}</option>
            <option value = "Male">     Male    </option>
            <option value = "Female">   Female </option>
         </select>
                <br>        
                
            </td>
        </tr>
     </table>
</div>

     
     
        <div data-panel="two">
            <h4>Poison Detail</h4>
            <table class="table">
        <tr>
            <td>    
                <label> 01) Date : 
                   <input type = "date" name = "date" id="datePickerId"  >
                </label>  
                <br>              
               
                <label>03) Region :<br>
                    <span class = "select">
                        <select name = "area" onchange='checkvalue1(this.value)'>
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
                            <option value = "Others"> Others </option>
                        </select>
                         <input type="text" name="Oarea" id="area" style='display:none;'/>
                      </span>
               </label>  
            <br>
               <label> 05) Part of plant :<br>
                      <span class = "select">
                        <select name = "plant_part" onchange='checkvalue2(this.value)'>
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "branches"> Branches </option>
                            <option value = "bulbs"> Bulbs  </option>
                            <option value = "flowers"> Flowers	  </option>
                            <option value = "leaves"> Leaves </option>
                            <option value = "pods"> Pods  </option>
                            <option value = "roots"> Roots </option>
                            <option value = "seeds"> Seeds  </option>
                            <option value = "stems"> Stems </option>
                            <option value = "twigs"> Twigs  </option>
                            <option value = "Others"> Others </option>
                        </select>
                          <input type="text" name="Oplant_part" id="plant_part" style='display:none;'/>
                        </span>

                </label>
                        <br>
                        
                        <label> 07) Mode of poisoning :<br> 
                   <span class = "select">
                        <select name = "poisoning_mode" onchange='checkvalue(this.value)'>
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Contact">  Contact   </option>
                            <option value = "Ingestion"> Ingestion  </option>
                            <option value = "Inhalation"> Inhalation </option>
                             <option value = "Others"> Others </option>
                        </select>
                       <input type="text" name="Opoisoning_mode" id="poisoning_mode" style='display:none;'/>
                    </span>
                </label> 
                         </td>
            
            <td>
               <label> 02) Time  : 
                   <input type = "time" name = "time" >
                </label>  <br><br>
                
              <label>04) Circumstance : <br>
                   <span class = "select">
                        <select name = "circumstance" onchange='checkvalue3(this.value)'>
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Accidental">  Accidental   </option>
                            <option value = "Homicidal"> Homicidal </option>
                            <option value = "Occupational"> Occupational </option>
                            <option value = "Sucidal"> Suicidal  </option>
                            <option value = "Others"> Others  </option>
                        </select>
                       <input type="text" name="Ocircumstance" id="circumstance" style='display:none;'/>
                    </span>
               </label>
            <br>
        <br>
       
                <label> 06) Amount of poisoning :<br>
                   <input type="text" name="amount" />
                </label>
            
            
          </td>
            
          </tr></table>
   </div>
                  
      
    <div data-panel="three">
          <h4>Clinical Feature</h4>
                @if($ray==1)
			<table>
                        <tr>
                            <td>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia </label>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="42" > Dry mouth </label>           
                       
                           </td>
       
                           <td></td><td></td> <td></td><td></td><td></td><td></td> <td></td><td></td>
                        <td>
                        <label><input type="checkbox" name ="AththanaClinical[]" value="48"  >  Erythema </label>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="54"  >  Fever </label> 
                        </td>
                        
                        <td></td><td></td> <td></td><td></td><td></td><td></td> <td></td><td></td>
                        <td>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="86" > Mydriasis </label>         
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="132" >  Tachycardia </label>
                       </td>
                        <tr>  
                        </table>         
                            <br><br>
                         
                              CNS effects : 
                                 <span class = "select">
                        <select name = "CNS">
                            
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "3">  Agitation   </option>
                            <option value = "22"> Combative  </option>
                            <option value = "23"> Confusion </option>
                             <option value = "38"> disorientation </option>
                        </select>
                    </span>
                              <br><br>
                         
                        
                     If others :<br>
                      <textarea rows = "4" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                
            @elseif($ray==2)      
            <label><input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia </label><br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="25" > Convulsion </label> <br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="32" >  Delirium </label><br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="37" > Dilation of pupils </label><br>             
                        <label><input type="checkbox" name ="AththanaClinical[]"  value="39" > Disturbance of consciousnessvalue </label>  <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]" value="43"  >  Dryness of mucous membrane   </label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="51"  > Eye inflammation </label> <br>           
                        <label><input type="checkbox" name ="AththanaClinical[]"  value="55" > Fits  </label>  <br> 
       
       
                        <label11> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="56" > Fits of crying </label> <br>      
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="57" > Flushing of face </label> <br>       
                        <label><input type="checkbox" name = "AththanaClinical[]" value="63" > Hallucinogenic_effects </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]" value="111"  >  Psychomotor_disturbances </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="133" > Talkativeness </label> <br>           
                        <label><input type="checkbox" name = "AththanaClinical[]"value="136"  > Thirst </label>   <br>  
                        </label11> 
                        <br><br>
                        If others :<br>
                      <textarea rows = "4" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br> 
                
                     @elseif($ray==3)
                          <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal_pain </label><br><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="34" >  Diarrhoea </label> <br> <br>
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="46"> Electrolytes imbalance </label><br> <br>             
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="89" >  Nausea </label> <br> <br>
                        <label><input type="checkbox" name ="AththanaClinical[]" value="93"> Numbness and burning of mouth </label>   <br> <br>
                         <label><input type="checkbox" name = "AththanaClinical[]" value="144"  >  Vomiting </label> <br> <br>    
                         
                          <label11> 
                            <b>   CVS :</b><br><br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="352" > 1st Degree HB </label><br> <br>      
                        <label><input type="checkbox" name = "AththanaClinical[]"   value="353" > 2nd Degree HB </label> <br> <br>       
                        <label><input type="checkbox" name = "AththanaClinical[]" value="9"> Atrial and ventricular ectopics </label> <br> <br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="74"> Hypotension </label> <br> <br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="80"> Junctional rhythms </label> <br> <br>
                        </label11>
                          
                          <label12>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="127"> Sinoatrial_block </label><br> <br>      
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="128"> Sinus bradycardia </label> <br> <br>       
                        <label><input type="checkbox" name = "AththanaClinical[]" value="129" > Slow pulse </label> <br> <br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="143" > Ventricular fibrillation </label> <br> <br>
                        </label12>
                         
                     If others :<br>
                      <textarea rows = "2" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                        
                         
                         @elseif($ray==4)
                         <b>   Ingestion :</b><br>
		                 <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal_pain </label><br> 
                           <label><input type="checkbox" name = "AththanaClinical[]"  value="2"> Acute renal failure </label> <br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="5" >  Anaphylaxis </label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="25"> Convulsion </label> <br>              
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="28" >  Cramps </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]" value="31"> Dehydration </label>   <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="34"  >  Diarrhoea </label> <br>   
                         <label><input type="checkbox" name ="AththanaClinical[]" value="46"> Electrolytes imbalance </label>  <br> 
                         
                            
                          <label11> 
                        <br><label><input type="checkbox" name = "AththanaClinical[]" value="60"  > Haematuria </label> <br>  
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="66" > Hepatic Necrosis</label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="73"> Hypoglycemia </label><br>              
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="89" >  Nausea </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]" value="119"> Retinal Haemorrhage </label>  <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="126"  >  Shock </label><br>   
                        <label><input type="checkbox" name = "AththanaClinical[]" value="144"  >  Vomiting </label> <br>
                        </label11>
                         
                         <br><br>
                          If others :<br>
                      <textarea rows = "2" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                       <label9> 
                       <b> Inhalation :</b><br>
		          <label><input type="checkbox" name = "AththanaClinical[]"  value="27"> Cough </label><br> 
                           <label><input type="checkbox" name = "AththanaClinical[]"  value="54"> 	Fever </label><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="77" > Hypoxaemia </label>  <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="113">  Pulmonary oedema </label><br>              
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="116" >	Respiratory distress </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]" value="146"> Weakness </label><br> 
                     </label9>  
                     
                 @elseif($ray==5)
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="15"> Bulging eyes</label><br> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="28"> Cramps </label><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="29" > Cyanosis </label> <br> 
	                     <label><input type="checkbox" name ="AththanaClinical[]"   value="37" >  Dilation of pupils </label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="49"> Extensor spasms </label> <br>              
                        <label><input type="checkbox" name ="AththanaClinical[]" value="69"> Hyperreflexia </label>  <br> 
			            <label><input type="checkbox" name ="AththanaClinical[]" value="71"> Hyperthermia  </label>  <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="84"  >  Metabolic acidosis </label> <br>   
                         <label><input type="checkbox" name = "AththanaClinical[]" value="85"  > Muscle twitching </label> <br>  
						 
                          
            
                          
                          <label11> 
            			<label><input type="checkbox" name ="AththanaClinical[]" value="88"> Myoglobinuria </label> <br> 
		            	<label><input type="checkbox" name = "AththanaClinical[]" value="99"  > Opisthotonus</label> <br>  
                        <label><input type="checkbox" name = "AththanaClinical[]" value="102"  > Painful convulsions</label> <br>  
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="104" > Pancreatitis</label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="112"> Pulmonary infiltration </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="114" > Renal failure </label>  <br> 						 
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="117" >  Respiratory failure </label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]" value="121"  > Rhabdomyolysis </label> <br>   
		            	<label><input type="checkbox" name ="AththanaClinical[]" value="123"> Risus sardonicus </label>  <br>  
                        </label11>
                       
                     <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
            @elseif($ray==6)       
                          <label><input type="checkbox" name ="AththanaClinical[]"    value="6" > Anuria</label>  <br>  
                         <label><input type="checkbox" name ="AththanaClinical[]"    value="8" > Aphonia </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="12"> Blisters of oral mucosa </label><br> 
			<label><input type="checkbox" name = "AththanaClinical[]"  value="13"> Bradycardia </label><br>  
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="16"> Burning sensation</label><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="25" >  Convulsion </label> <br>           
                        <label><input type="checkbox" name ="AththanaClinical[]" value="44"> Dysphagia </label> <br> 
			 <label><input type="checkbox" name ="AththanaClinical[]" value="61"> Haemorrhagic gastritis </label><br> 
                        <label><input type="checkbox" name = "AththanaClinical[]" value="78"  >  Impaired articulation </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]" value="90"> Necrosis </label> <br> 
			<label><input type="checkbox" name = "AththanaClinical[]" value="91"  > Necrotic oesophagitis </label> <br>  
                        
                         
             <label11>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="98"  > Oliguria </label> <br> 
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="100" > Oral cavity irritation </label> <br> 
			<label><input type="checkbox" name ="AththanaClinical[]"   value="101" > Pain </label> <br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="109"> Profuse salivation </label><br>                        						 
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="114" >  Renal failure </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]" value="138"  > Tremor </label><br><br>  
                         <b> Hypocalcemia </b><br>
		          <label><input type="checkbox" name = "AththanaClinical[]"  value="19"> Circumoral paresthesia </label><br> 
                           <label><input type="checkbox" name = "AththanaClinical[]"  value="85"> Muscle twitching </label><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="139" > Trismus </label>  <br> 
            </label11>
                        
                         <label13>
                             <b>Oedema of the </b><br>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="93"> Mouth </label><br>       
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="94"> Lips </label><br>       
                        <label><input type="checkbox" name = "AththanaClinical[]" value="95" > Salivary glands </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="96" > Throat </label> <br> 
                        </label13>
                        
                        <label14>
                            <b>Eye contact </b><br>
                        <label><input type="checkbox" name = "AththanaClinical[]" value="11"  > Blepharospasm </label><br> 
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="24" > Conjunctival chemosis</label> <br> 
			<label><input type="checkbox" name ="AththanaClinical[]"   value="26" > Corneal abrasions </label><br> 
                         <label><input type="checkbox" name = "AththanaClinical[]"  value="52"> Eyelid oedema </label><br>                        						 
                        <label><input type="checkbox" name ="AththanaClinical[]"   value="79" > Intense pain </label> <br> 
                        <label><input type="checkbox" name = "AththanaClinical[]" value="106"  > Photophobia </label><br>  
                        <label><input type="checkbox" name = "AththanaClinical[]" value="145"  > Watery eyes </label><br>  
                        </label14>
                    
                         <br>   If others :<br>
                      <textarea rows = "2" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                       @elseif($ray==7)
						<label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain </label><br> 
                                                <label><input type="checkbox" name = "AththanaClinical[]"  value="34">  Diarrhoea </label><br>            
                                                 <label><input type="checkbox" name ="AththanaClinical[]"    value="40" > Dizziness  </label><br> 
						<label><input type="checkbox" name ="AththanaClinical[]"   value="37" >  Exudate </label> <br> 
						<label><input type="checkbox" name ="AththanaClinical[]" value="54">	Fever  </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]"  value="70"> Hypersensitivity reactions </label> <br>                    
						<label><input type="checkbox" name ="AththanaClinical[]" value="92">	Necrotising enteritis </label>   <br> 
                          
                      
                          <label11> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="87"  > Myocarditis </label><br>  
						<label><input type="checkbox" name = "AththanaClinical[]" value="105"  > Papilloedema </label><br>  
						<label><input type="checkbox" name = "AththanaClinical[]" value="118"  > Restlessness </label><br> 
						<label><input type="checkbox" name ="AththanaClinical[]"    value="120" > Retinopathy </label><br> 
						<label><input type="checkbox" name ="AththanaClinical[]" value="122"> Right iliac fossa tenderness </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]" value="134"  > Tender liver</label> <br>  
						<label><input type="checkbox" name = "AththanaClinical[]" value="144"  > Vomiting </label><br>  
                     </label11> 
                    
                    <br><br>   If others :<br>
                      <textarea rows = "4" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                       @elseif($ray==8)
						<label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain </label><br> 
                                                 <label><input type="checkbox" name = "AththanaClinical[]"  value="7"> Anxiety </label><br>      
						<label><input type="checkbox" name ="AththanaClinical[]"   value="13" >  Bradycardia </label> <br> 						
                                                <label><input type="checkbox" name ="AththanaClinical[]"    value="17" > burning sensation of mouth </label> <br> 
					        <label><input type="checkbox" name ="AththanaClinical[]" value="21"> Coma </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]"  value="25"> Convulsion </label><br>                    
						<label><input type="checkbox" name ="AththanaClinical[]" value="34">	Diarrhoea </label><br> 
                                                <label><input type="checkbox" name = "AththanaClinical[]"  value="46"> Electrolytes imbalance </label><br>                    
						<label><input type="checkbox" name ="AththanaClinical[]" value="74">	Hypotension </label>   <br>  
                                                 <label><input type="checkbox" name = "AththanaClinical[]" value="89"  > Nausea </label> <br> 
                      
                          <label11> 
						 
					        <label><input type="checkbox" name = "AththanaClinical[]" value="118"  > Restlessness </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]" value="135"  > Tenderness </label><br>  
						<label><input type="checkbox" name ="AththanaClinical[]"    value="141" > Ventricular arrhythmia </label><br> 
						<label><input type="checkbox" name ="AththanaClinical[]" value="142"> Ventricular ectopics </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]" value="147"  > Yellow vision </label><br>  
						<label><input type="checkbox" name = "AththanaClinical[]" value="144"  > Vomiting </label><br>
                                                <b> HB </b><br>
		          <label><input type="checkbox" name = "AththanaClinical[]"  value="352"> 1st degree heart block</label><br> 
                           <label><input type="checkbox" name = "AththanaClinical[]"  value="353"> 2nd degree heart block</label><br>            
                        <label><input type="checkbox" name ="AththanaClinical[]"    value="399" > 3rd degree heart block </label> <br> 

						
                     </label11> 
                                                 <br>   If others :<br>
                      <textarea rows = "2" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     

                      @elseif($ray==9)
						<label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="349"> Burning sensation of throat</label> <br>  
						 <label><input type="checkbox" name ="AththanaClinical[]" value="20"> 	CNS depression </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="31"> Dehydration </label> <br>   
						 <label><input type="checkbox" name ="AththanaClinical[]" value="34">	Diarrhoea </label><br> 
						 <label><input type="checkbox" name ="AththanaClinical[]" value="41">	Drowsiness  </label> <br> 
                                                 <label><input type="checkbox" name = "AththanaClinical[]"  value="45"> Ecg abnormalities </label><br>
						<label><input type="checkbox" name = "AththanaClinical[]" value="62"> Haemorrhagic gastroententis </label> <br> 
                                                 <label><input type="checkbox" name ="AththanaClinical[]"   value="68" > Hyperpnoea </label>  <br> 
                                                  <label><input type="checkbox" name ="AththanaClinical[]" value="74">	Hypotension </label>   <br>  
	
                          <label11> 
		
						 <label><input type="checkbox" name = "AththanaClinical[]" value="89"  > Nausea </label><br>  
						<label><input type="checkbox" name = "AththanaClinical[]" value="107"  > Polydipsia </label><br>  
						<label><input type="checkbox" name ="AththanaClinical[]"    value="124" > Salivation </label><br> 
						<label><input type="checkbox" name ="AththanaClinical[]" value="130"> Sweating </label><br> 
						<label><input type="checkbox" name = "AththanaClinical[]" value="144"  > Vomiting </label> <br>

    
						
						
                     </label11> 
                                                <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                      @elseif($ray==10)
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain </label><br> 
					     <label><input type="checkbox" name ="AththanaClinical[]" value="2"> Acute renal failure </label><br> 
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="4"> Alopecia </label> <br>  
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="10"> Bleeding manifestations </label><br>
						 <label><input type="checkbox" name ="AththanaClinical[]" value="18"> Cardiac arrhythmias </label> <br> 
						 <label><input type="checkbox" name ="AththanaClinical[]" value="21"> Coma </label> <br> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="23"> Confusion </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"   value="25" >  Convulsion </label> <br> 
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="31"> Dehydration </label><br>   
						 <label><input type="checkbox" name ="AththanaClinical[]" value="34">	Diarrhoea </label><br> 
						
        
                          <label11> 
						  <label><input type="checkbox" name ="AththanaClinical[]" value="46">	Electrolytes imbalance </label> <br>
						  <label><input type="checkbox" name ="AththanaClinical[]" value="58"> Gastroenteritis </label><br> 
						  <label><input type="checkbox" name = "AththanaClinical[]" value="65" > Hepatic insufficiency </label><br>  			  
						  <label><input type="checkbox" name ="AththanaClinical[]" value="74">	Hypotension  </label>  <br>
						  <label><input type="checkbox" name ="AththanaClinical[]" value="72"> Hypocalcemia </label> <br> 
						  <label><input type="checkbox" name ="AththanaClinical[]"   value="75" > Hypovolaemia </label> <br>
						  <label><input type="checkbox" name ="AththanaClinical[]"    value="84" > Metabolic acidosis </label><br> 						
						  <label><input type="checkbox" name = "AththanaClinical[]" value="89"  > Nausea </label> <br>  
						  <label><input type="checkbox" name = "AththanaClinical[]" value="108" > Polyneuropathy </label><br>
                          <label><input type="checkbox" name ="AththanaClinical[]"    value="115" >Respiratory depression </label><br> 
                          </label11> 
                                                
                          <label13>

                          <label><input type="checkbox" name = "AththanaClinical[]" value="121"  > Rhabdomyolysis </label> <br>                          
                          <label><input type="checkbox" name ="AththanaClinical[]"    value="126" > Shock </label><br> 
			   <label><input type="checkbox" name = "AththanaClinical[]" value="144"  > Vomiting </label><br>    

                          </label13>  
                                                 
                                                <br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                    
                       @elseif($ray==11)
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="1"> Abdominal pain </label><br> 
					         <label><input type="checkbox" name ="AththanaClinical[]" value="2"> Acute renal failure </label><br> 
						 <label><input type="checkbox" name ="AththanaClinical[]"   value="25" >  Convulsion </label> <br>   
						 <label><input type="checkbox" name ="AththanaClinical[]" value="34">	Diarrhoea </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="33"  > Demyelination </label><br>
                                                 <label><input type="checkbox" name ="AththanaClinical[]" value="41">	Drowsiness  </label> <br>
						 <label><input type="checkbox" name ="AththanaClinical[]"    value="59" > Haematemesis </label><br>
                                                <label><input type="checkbox" name = "AththanaClinical[]" value="67"  > Hepatotoxicity </label><br>   						 
						
        
                          <label11> 
						 <label><input type="checkbox" name ="AththanaClinical[]"    value="73" > Hypoglycemia </label><br>  
						 <label><input type="checkbox" name = "AththanaClinical[]"  value="76"> Hypovolemic shock </label><br> 
					         <label><input type="checkbox" name ="AththanaClinical[]" value="83"> Malena </label><br>
					         <label><input type="checkbox" name = "AththanaClinical[]" value="89"  > Nausea </label><br>   
						 <label><input type="checkbox" name ="AththanaClinical[]" value="103"> Pallor </label><br>
						 <label><input type="checkbox" name = "AththanaClinical[]" value="119" > Retinal haemorrhage </label> <br>							 
                                                 <label><input type="checkbox" name = "AththanaClinical[]" value="135" > Tenderness </label> <br> 
						 <label><input type="checkbox" name = "AththanaClinical[]" value="144" > Vomiting </label><br> 
						 </label11> 
                                                 <br><br>   If others :<br>
                      <textarea rows = "3" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                     
                      @elseif($ray==12)
                      
                   <textarea rows = "13" cols = "150" name = "Laboratory Detail"  placeholder="Enter Clinical Features here "></textarea>
                       
            @endif
        
    </div>
		    
            
    <div data-panel="four">
			<h4> Managemnt Detail</h4>
                     <label><input type="checkbox" name = "management[]" value="3"  >  Alkalinization </label> <br>
                     <label><input type="checkbox" name = "management[]" value="4"  >  Analgesics given</label> <br>
                     <label><input type="checkbox" name = "management[]" value="5"  > Antibiotics given </label> <br>
                     <label><input type="checkbox" name = "management[]" value="6"  > Anticonvulsants given </label> <br>  
                     <label><input type="checkbox" name = "management[]" value="9"  >  Atropine given </label> <br>
                     <label><input type="checkbox" name = "management[]" value="10"  > Blood transfusion/Plasma expanders </label><br>    
                     <label><input type="checkbox" name = "management[]" value="11"   > Calcium gluconate given </label><br>
                     <label><input type="checkbox" name = "management[]" value="13"   > Dialysis </label> <br>

                        <br>
                     <label11> 
                            <label><input type="checkbox" name = "management[]" value="14"  >  Dopamine given </label> <br>
                             <label><input type="checkbox" name = "management[]" value="20"  >  Methylprednisolone/Corticosteroids </label> <br>
                            <label><input type="checkbox" name = "management[]" value="21">  NaCl given </label><br>
                            <label><input type="checkbox" name = "management[]" value="22"  >  NaHCO3 given </label><br>                        
                            <label><input type="checkbox" name = "management[]" value="24"  > Prednisalone given </label><br>      
                            <label><input type="checkbox" name = "management[]" value="26"  > Resuscitation </label><br>
                            <label><input type="checkbox" name = "management[]" value="29"  > Supportive therapy </label><br>
                   </label11> 
                        If others : <br> 
                            <textarea rows = "4" cols = "120" name = "managements others"  placeholder="Enter other management detail here"></textarea>
                        <br><br>
                        
                        <label9> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <label><input type="checkbox" name = "management[]" value="15"  > Gastric_aspiration </label><br><br> 
                         <label><input type="checkbox" name = "management[]" value="1"  > Activated chracol</label><br>  
                           
                          If yes, number of doses :  
                            <input type="text" name = "activated_chracol_doses" >
                         <br><br><br>
                         
                         <label> <b> Antidote :</b> </label><br><br>
                            <label><input type="checkbox" name = "management[]" value="7"  > Antidote given </label><br>  
                             If yes, type of antidote :  
                            <input type="text" name = "antidote" >
                         </label9>
                         
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
            @elseif($ray==10)     
                  <input type="hidden" name="id" value="10" > 
            @elseif($ray==11)     
                  <input type="hidden" name="id" value="11" >
            @elseif($ray==12)     
                  <input type="hidden" name="id" value="12" >
            @endif  
                           
            <button  type="reset" value=""  onclick="return confirm(&quot;Reset the data?&quot;)" >Reset</button> 
            <button type="submit" name ="view" >Save</button>  
         
    </div>
</form> 
              
	</div>
        
	<button onclick="doclick()" name="next" id="btn_hide"  >next</button>

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

                
                
  