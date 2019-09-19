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
        <h2 style="text-align: center"><b>  Poison : Aththana (Datura stramonium)  </b></h2><br>
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
         
    
     <h3 style="text-align: center"><b> Category : Natural Toxins - Flora   </b></h3><br>
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
        
     <form action="/submitFlora" method="post">	
     @csrf      
        <div data-panel="two">
	        <h4>Poison Detail</h4>
                             
                <label1> 01) Date : 
                   <input type = "date" name = "date" id="datePickerId"  >
                </label1>  
                              
                <label2> 02) Time  : 
                   <input type = "time" name = "time" >
                </label2>
               
                <label3>03) Region :
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
                             <option value = "Occupational"> Outside Jaffna District </option>
                        </select>
                    </span>
               </label3>  
            
               <label4> 04) Part of plant :
                      <span class = "select">
                        <select name = "plant_part">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Branches"> Branches </option>
                            <option value = "Bulbs"> Bulbs  </option>
                            <option value = "Flowers"> Flowers	  </option>
                            <option value = "Leaves"> Leaves </option>
                            <option value = "pods"> Pods  </option>
                            <option value = "Roots"> Roots </option>
                            <option value = "Seeds"> Seeds  </option>
                            <option value = "Stems"> Stems </option>
                            <option value = "Twigs"> Twigs  </option>
                        </select>
                </label4>
                        <br><br>
           
              <label6>05) Circumstance : 
                   <span class = "select">
                        <select name = "circumstance">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Accidental">  Accidental   </option>
                            <option value = "Homicidal"> Homicidal </option>
                            <option value = "Occupational"> Occupational </option>
                            <option value = "Sucidal"> Suicidal  </option>
                        </select>
                    </span>
               </label6>
            <br><br>
        <br>        
         
                 <label7>06) Mode of poisoning : 
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
        <br><br>
        
       
                <label5> 07) Amount of poisoning :
                   <input type="number" min="0" name="amount" />
                </label5>
        <br><br>
         
   </div>
                  
      
    <div data-panel="three">
          <h4>Clinical Feature</h4>
                @if($ray==1)
			
                        <input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia<br><br> 
                        <input type="checkbox" name = "AththanaClinical[]"  value="42" > Dry mouth<br> <br>            
                        <input type="checkbox" name ="AththanaClinical[]" value="48"  >  Erythema<br> <br>
       
                        <label11> 
                        <input type="checkbox" name = "AththanaClinical[]" value="54"  >  Fever<br> <br>
                        <input type="checkbox" name = "AththanaClinical[]"  value="86" > Mydriasis<br> <br>           
                        <input type="checkbox" name = "AththanaClinical[]"  value="132" >  Tachycardia<br> <br>
                        </label11><br>              
                            
                         
                              CNS effects : 
                                 <span class = "select">
                        <select name = "CNS">
                            
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "3">  Agitation   </option>
                            <option value = "22"> Combative  </option>
                            <option value = "23"> Confusion </option>
                             <option value = "38">disorientation </option>
                        </select>
                    </span>
                              <br><br>
                         
                        
                     If others :<br>
                      <textarea rows = "4" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br>
                
            @elseif($ray==2)      
            <input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia<br>
                        <input type="checkbox" name = "AththanaClinical[]"  value="25" > Convulsion<br>            
                        <input type="checkbox" name ="AththanaClinical[]"   value="32" >  Delirium <br> 
                         <input type="checkbox" name = "AththanaClinical[]" value="37" > Dilation of pupils<br>             
                        <input type="checkbox" name ="AththanaClinical[]"  value="39" > Disturbance of consciousnessvalue   <br> 
                        <input type="checkbox" name ="AththanaClinical[]" value="43"  >  Dryness of mucous membrane    <br> 
                         <input type="checkbox" name = "AththanaClinical[]" value="51"  > Eye inflammation  <br>           
                        <input type="checkbox" name ="AththanaClinical[]"  value="55" >Fits     <br> 
       
       
                        <label11> 
                        <input type="checkbox" name = "AththanaClinical[]"  value="56" > Fits of crying <br>      
                        <input type="checkbox" name = "AththanaClinical[]"  value="57" > Flushing of face  <br>       
                        <input type="checkbox" name = "AththanaClinical[]" value="63" > Hallucinogenic_effects    <br> 
                        <input type="checkbox" name = "AththanaClinical[]" value="111"  >  Psychomotor_disturbances  <br> 
                        <input type="checkbox" name = "AththanaClinical[]"  value="133" > Talkativeness  <br>           
                        <input type="checkbox" name = "AththanaClinical[]"value="136"  > Thirst    <br>  
                        </label11> 
                        <br><br>
                        If others :<br>
                      <textarea rows = "4" cols = "150" name = "clinicals_others"  placeholder="Enter other Clinical Features here"></textarea>
                     <br><br> 
                
                     @elseif($ray==3)
                
                
            @endif
        
    </div>
		    
            
    <div data-panel="four">
			<h4> Managemnt Detail</h4>
                     <input type="checkbox" name = "management[]" value="3"  >  Alkalinization <br>
                     <input type="checkbox" name = "management[]" value="4"  >  Analgesics given <br>
                     <input type="checkbox" name = "management[]" value="5"  > Antibiotics given <br>
                     <input type="checkbox" name = "management[]" value="6"  > Anticonvulsants given  <br>  
                     <input type="checkbox" name = "management[]" value="9"  >  Atropine given <br>
                     <input type="checkbox" name = "management[]" value="10"  > Blood transfusion/Plasma expanders <br>    
                     <input type="checkbox" name = "management[]" value="11"   > Calcium gluconate given <br>
                     <input type="checkbox" name = "management[]" value="13"   > Dialysis <br>

                     <label11> 
                            <input type="checkbox" name = "management[]" value="14"  >  Dopamine given <br>
                             <input type="checkbox" name = "management[]" value="20"  >  Methylprednisolone/Corticosteroids <br>
                            <input type="checkbox" name = "management[]" value="21">  NaCl given <br>
                            <input type="checkbox" name = "management[]" value="22"  >  NaHCO3 given <br>                        
                            <input type="checkbox" name = "management[]" value="24"  > Prednisalone given <br>      
                            <input type="checkbox" name = "management[]" value="26"  > Resuscitation <br>
                            <input type="checkbox" name = "management[]" value="29"  > Supportive therapy <br>
                   </label11> 
                        <br>
                        If others : <br> 
                            <textarea rows = "4" cols = "120" name = "managements others"  placeholder="Enter other management detail here"></textarea>
                        <br><br>
                        
                        <label9> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <input type="checkbox" name = "management[]" value="15"  > Gastric_aspiration<br><br> 
                         <input type="checkbox" name = "management[]" value="1"  > Activated chracol<br>  
                           
                          If yes, number of doses :  
                            <input type="text" name = "activated_chracol_doses" >
                         <br><br><br>
                         
                         <label> <b> Antidote :</b> </label><br><br>
                            <input type="checkbox" name = "management[]" value="7"  > Antidote given<br>  
                             If yes, type of antidote :  
                            <input type="text" name = "antidote" >
                         </label9>
                         
    </div>
             
    <div data-panel="five">
        <h4>Laboratory Detail</h4>
                   <textarea rows = "13" cols = "150" name = "Laboratory Detail"  placeholder="Enter laboratory detail here "></textarea>
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
            @elseif($ray==10)     
                  <input type="hidden" name="id" value="10" > 
            @elseif($ray==11)     
                  <input type="hidden" name="id" value="11" >
            @elseif($ray==12)     
                  <input type="hidden" name="id" value="12" >
            @endif  
                           
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