<!DOCTYPE html>
<html lang="en">
<head>
    <title>AththanaUpdateForm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #53c68c;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="jumbotron text-center p-1">
            <h1>AththanaUpdate</h1>
        </div>
        <div class="round3">
            <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
            <div>
            <table style="width:100%">
                <tr>
                    <th>
                        <h3>
                            <a name ="Poison Detail"></a>
                            <p><a href="#Poison Detail">Poison Detail</a></p>
                        </h3>
                    </th>
                    <th>
                        <h3>
                            <p><a href="#Managemnt Detail">Managemnt Detail</a></p>  
                        </h3>
                    </th>
                    <th>
                        <h3>
                        <p><a href="#Gastrointestinal decontamination">Gastrointestinal decontamination</a></p>  
                        </h3>
                    </th>
                </tr>

            </table>
                <!--h3>Poison Detail</h3-->
                <div class="row">
                    <div class="col-sm-4 pl-4">
                        <label1> 01) Date :
                            <input type="date" name="date" id="date" value="{{old('date') ?? $incident->date}}">

                        </label1>
                    </div>
                    <script>
                        var a = "{{$incident->id}}";
                        var b = "";

                    </script>
                    <div class="col-sm-4 pl-4">
                        <label2 class="pl-5"> 02) Time :
                            <input type="time" name="time" value="{{old('date') ?? $incident->time}}">
                        </label2>
                    </div>
                    <div class="col-sm-3 pl-4">

                        <label3>03) Region :

                            <span class="select">
                                    <select name="area" id="area" type="time">
                                        <option value=" "> ..Please choose one option.. </option>
                                        <option id="Chankanai" value="Chankanai"> Chankanai </option>
                                        <option id="Chavakachcheri" value="Chavakachcheri"> Chavakachcheri  </option>
                                        <option id="Delft" value="Delft"> Delft  </option>
                                        <option id="Jaffna" value="Jaffna"> Jaffna  </option>
                                        <option id="Karainagar" value="Karainagar"> Karainagar  </option>
                                        <option id="Karaveddy" value="Karaveddy"> Karaveddy  </option>
                                        <option id="Kayts" value="Kayts"> Kayts  </option>
                                        <option id="Kopay" value="Kopay"> Kopay  </option>
                                        <option id="Maruthankerney" value="Maruthankerney"> Maruthankerney  </option>
                                        <option id="Nallur" value="Nallur"> Nallur  </option>
                                        <option id="Point Pedro" value="Point Pedro"> Point Pedro  </option>
                                        <option id="Sandilipay" value="Sandilipay"> Sandilipay  </option>
                                        <option id="Tellippalai" value="Tellippalai"> Tellippalail  </option>
                                        <option id="Uduvil" value="Uduvil"> Uduvil  </option>
                                        <option id="Velanai" value="Velanai"> Velanai  </option>
                                        <option id="Outside Jaffna District" value="Outside Jaffna District"> Outside Jaffna District </option>
                                    </select>

                                    <script>
                                        var a = "{{$incident->area}}";

                                        function setSelectedIndex(s, v) {

                                            for (var i = 0; i < s.options.length; i++) {

                                                if (s.options[i].id == v) {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }

                                        // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('area'), a);

                                    </script>
                            </span>
                        </label3>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-sm-4 pl-4">
                    <label4> 04) Part of plant :
                        <span class = "select">
                            <select name = "plant_part" id ="plant_part">
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
                            </select>
                            <script>
                                        var a = "{{$flora->plant_part}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('plant_part'),a);

                            </script>
                        </span>
                    </label4>
                    </div>
                    <div class="col-sm-4 pl-4">
                        <label6>05) Circumstance :
                        <span class = "select">
                                <select name = "circumstance" id="circumstance">
                                    <option value = " "> ..Please choose one option.. </option>
                                    <option value = "Accidental">  Accidental   </option>
                                    <option value = "Homicidal"> Homicidal </option>
                                    <option value = "Occupational"> Occupational </option>
                                    <option value = "Sucidal"> Suicidal  </option>
                                </select>
                                <script>
                                        var a = "{{$flora->circumstance}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('circumstance'),a);
                                </script>
                            </span>
                    </label6>
                        <br><br>
                    </div>
                    <div class="col-sm-4 pl-4">
                    <label7>06) Mode of poisoning :
                    <span class = "select">
                            <select name = "poisoning_mode" id = "poisoning_mode">
                                <option value = " "> ..Please choose one option.. </option>
                                <option value = "Contact">  Contact   </option>
                                <option value = "Ingestion"> Ingestion  </option>
                                <option value = "Inhalation"> Inhalation </option>
                                <option value = "Others"> Others </option>
                            </select>
                            <script>
                                        var a = "{{$flora->poisoning_mode}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('poisoning_mode'),a);
                                </script>

                        </span>
                    </label7>
                    <br><br>
                    </div>
                </div>

                <div class="col-sm-4 pl-4">
                        <label5> 07) Amount of poisoning :
                        <input type="number" min="0" name="amount" value="{{old('date') ?? $flora->amount}}"/>
                        </label5>
                        <br><br>

                </div>
            </div>

                <div data-panel="four">

                <table style="width:100%">
                    <tr>
                        <th>
                            <h3>
                                <p><a href="#Poison Detail">Poison Detail</a></p>
                            </h3>
                        </th>
                        <th>
                            <h3>
                                <a name ="Managemnt Detail"></a>
                                <p><a href="#Managemnt Detail">Managemnt Detail</a></p>  
                            </h3>
                        </th>
                        <th>
                            <h3>
                                <p><a href="#Gastrointestinal decontamination">Gastrointestinal decontamination</a></p>  
                            </h3>
                        </th>
                    </tr>
                </table>

                    <h4> Managemnt Detail</h4>
                    <div>
                        <input type="checkbox"
                        id = "test1"
                        name = "management[]"
                        class="check1"
                        value="03"
                        @if ( $managements ->contains(3))
                            checked
                        @endif
                        >
                        <label for="test1">Alkalinization</label>
                    </div>

                    <div>
                        <input type="checkbox"
                        id = "test2"
                        name = "management[]"
                        class="check1"
                        value="04"
                        @if ( $managements ->contains(4))
                            checked
                        @endif
                        >
                        <label for="test2">Analgesics given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test3"
                        name = "management[]"
                        class="check1"
                        value="05"
                        @if ( $managements ->contains(5))
                            checked
                        @endif
                        >
                        <label for="test3">Antibiotics given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test4"
                        name = "management[]"
                        class="check1"
                        value="06"
                        @if ( $managements ->contains(6))
                            checked
                        @endif
                        >
                        <label for="test4">Anticonvulsants given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test5"
                        name = "management[]"
                        class="check1"
                        value="9"

                        @if ( $managements ->contains(9))
                            checked
                        @endif
                        >
                        <label for="test5">Atropine given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test6"
                        name = "management[]"
                        class="check1"
                        value="10"
                        @if ( $managements ->contains(10))
                            checked
                        @endif
                        >
                        <label for="test6">Blood transfusion/Plasma expanders </label>
                    </div>

                    <div>
                        <input type="checkbox"
                        id = "test7"
                        name = "management[]"
                        class="check1"
                        value="11"
                        @if ( $managements ->contains(11))
                            checked  = true;
                        @endif
                        >
                        <label for="test7">Calcium gluconate given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test8"
                        name = "management[]"
                        class="check1"
                        value="13"
                        @if ( $managements ->contains(13))
                            checked
                        @endif
                        >
                        <label for="test8">Dialysis </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test9"
                        name = "management[]"
                        value="14"
                        @if ( $managements ->contains(14))
                            checked
                        @endif
                        >
                        <label for="test9">Dopamine given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test10"
                        name = "management[]"
                        value="20"
                        @if ( $managements ->contains(20))
                            checked
                        @endif
                        >
                        <label for="test10">Methylprednisolone/Corticosteroids </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test11"
                        name = "management[]"
                        value="21"
                        @if ( $managements ->contains(21))
                            checked
                        @endif
                        >
                        <label for="test11">NaCl given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test12"
                        name = "management[]"
                        value="22"
                        @if ( $managements ->contains(22))
                            checked
                        @endif
                        >
                        <label for="test12">NaHCO3 given </label>
                        </div>
                    <div>
                        <input type="checkbox"
                        id = "test13"
                        name = "management[]"
                        value="24"
                        @if ( $managements ->contains(24))
                            checked
                        @endif
                        >
                        <label for="test13">Prednisalone given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test14"
                        name = "management[]"
                        value="26"
                        @if ( $managements ->contains(26))
                            checked
                        @endif
                        >
                        <label for="test14">Resuscitation </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test15"
                        name = "management[]"
                        value="29"
                        @if ( $managements ->contains(29))
                            checked
                        @endif
                        >
                        <label for="test15">Supportive therapy </label>
                    </div>

                    If others : <br>
                            <textarea id="testone" rows = "4" cols = "120" name = "managements others" value="{{old('date') ?? $incident->management_others}}" placeholder="Enter other management detail here">{{$incident->management_others}}</textarea>
                        <br><br>

                    <div>
                    <table style="width:100%">
                        <tr>
                            <th>
                                <h3>
                                    <p><a href="#Poison Detail">Poison Detail</a></p>
                                </h3>
                            </th>
                            <th>
                                <h3>
                                    <p><a href="#Managemnt Detail">Managemnt Detail</a></p>  
                                </h3>
                            </th>
                            <th>
                                <h3>
                                <a name ="Gastrointestinal decontamination"></a>
                                <p><a href="#Gastrointestinal decontamination">Gastrointestinal decontamination</a></p>  
                                </h3>
                            </th>
                        </tr>
                    </table>

                    <b> Gastrointestinal decontamination : </b></label><br><br>
                    <div>
                        <input type="checkbox"
                        id = "test16"
                        name = "management[]"
                        value="15"
                        @if ( $managements ->contains(15))
                            checked
                        @endif
                        >
                        <label for="test16">Gastric_aspiration</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test17"
                        name = "management[]"
                        value="1"
                        @if ( $managements ->contains(1))
                            checked
                        @endif
                        >
                        <label for="test17">Activated chracol</label>
                    </div>

                        If yes, number of doses :
                        <input type="text" name = "activated_chracol_doses" value="{{old('activated_chracol_doses') ?? $flora->activated_chracol_doses}}" >
                        <br><br>

                        Antidote :
                        <br>
                        <div>
                        <input type="checkbox"
                        id = "test18"
                        name = "management[]"
                        value="7"
                        @if ( $managements ->contains(7))
                            checked
                        @endif
                        >
                        <label for="test18">Antidote given</label>
                    </div>                            
                        If yes, type of antidote :
                        <input type="text" name = "antidote" value="{{old('antidote') ?? $flora->antidote}}" >
                    </div>
                </div>
        <div data-panel="three">
          <h4>Clinical Feature</h4>
                @if($ray==1)
			

                        <label><input type="checkbox" name = "AththanaClinical[]"  value="30" >  Cycloplegia </label><br><br> 
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="42" > Dry mouth </label><br> <br>            
                        <label><input type="checkbox" name ="AththanaClinical[]" value="48"  >  Erythema </label><br> <br>

       
                        <label11> 
                        <label><input type="checkbox" name = "AththanaClinical[]" value="54"  >  Fever </label> <br> <br>
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="86" > Mydriasis </label> <br> <br>           
                        <label><input type="checkbox" name = "AththanaClinical[]"  value="132" >  Tachycardia </label> <br> <br>
                        </label11><br>              
                            
                         
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
		    


                    <div class="row p-4">
                            <button class="btn btn-success">
                                Save
                            </button>
                    </div>
            </form>

        <blockquote class="blockquote">
            <footer class="blockquote-footer">CB Tennakoon</footer>
        </blockquote>
        </div>
    </div>
</body>
</html>


