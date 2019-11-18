<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$incident->toxicity->name}}  Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <br><br><br>
 @if($incident->toxicity->name =='Aththana')
   <h1  class="font-weight-bold" align="center">Aththana (Datura stramonium) </h1>
 @elseif($incident->toxicity->name =='Divikaduru')
   <h1  class="font-weight-bold" align="center">Divikaduru (Tabernaemantana dichotoma)  </h1>
 @elseif($incident->toxicity->name =='DiyaKaduru')
   <h1  class="font-weight-bold" align="center">DiyaKaduru (Cerebra manghas) </h1>
 @elseif($incident->toxicity->name =='Endaru')
   <h1  class="font-weight-bold" align="center">Endaru (Ricinus communis) </h1>
 @elseif($incident->toxicity->name =='GodaKaduru')
   <h1  class="font-weight-bold" align="center">GodaKaduru (Stvychnos nuxvomica ) </h1>
 @elseif($incident->toxicity->name =='Habarala')
   <h1  class="font-weight-bold" align="center">Habarala (Alocasia macromhiza) </h1>
@elseif($incident->toxicity->name =='Hondala')
   <h1  class="font-weight-bold" align="center">Hondala(Adenia Hondola) </h1>
@elseif($incident->toxicity->name =='Kaneru')
   <h1  class="font-weight-bold" align="center">Kaneru (Nerium oleandor/Thevetia peruviana) </h1>
@elseif($incident->toxicity->name =='Kepunkiriya')
   <h1  class="font-weight-bold" align="center">Kepunkiriya (Euphorbia hirita)  </h1>
@elseif($incident->toxicity->name =='Niyagala')
   <h1  class="font-weight-bold" align="center">Niyagala (Gloriosa superba) </h1>
@elseif($incident->toxicity->name =='Olinda')
   <h1  class="font-weight-bold" align="center">Olinda (Abrus precatorius) </h1>
@elseif($$incident->toxicity->name =='Unknown plant poisoning')
   <h1  class="font-weight-bold" align="center">Unknown plant poisoning  </h1>
 @endif
 <div class="container">
    <br><br>
 


  
  <h3 class="font-weight-bold">Personel Detail</h3>
  <br>

 <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
  @csrf   
  @method('PATCH')

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">First Name : </label>
        <input type="text" name ="fname" class="form-control" id="validationCustom01" value="{{$patient->fname}}">
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Last Name : </label>
      <input type="text"  name ="lname"  class="form-control" id="validationCustom02" value="{{$patient->lname}}">
   
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">PHN : </label>
        <input type="number" name ="phn"  class="form-control" id="validationCustom01" value="{{$patient->phn}}" >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> BirthDay : </label>
      <input type="Date" name ="bdate"  class="form-control" id="validationCustom02" value="{{$patient->bdate}}" >
   
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">NIC : </label>
        <input type="number" name ="nic"  class="form-control" id="validationCustom01" value="{{$patient->nic}}" >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Address : </label>
      <input type="text"  name ="address" class="form-control" id="validationCustom02" value="{{$patient->address}}" >
   
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Gender : </label>
        <input type="text"  name ="gender" class="form-control" id="validationCustom01" value="{{$patient->gender}}" >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact : </label>
      <input type="number" name ="contact"  class="form-control" id="validationCustom02" value="{{$patient->contact}}" >
   
        </div>
   </div>
</div>
<br><br>

  
  <h3 class="font-weight-bold">Poison Detail</h3>
  <br>
     
 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Date : </label>
        <input type="date" name = "date" class="form-control" value ="{{$incident->date}}"  >
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Time : </label>
      <input type="time" name = "time" class="form-control"  value="{{$incident->time}}" >
   
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Part of plant : </label>
       <select  class="form-control" id="" value="" name="plant_part">
            <option  value="{{$toxicity->natural->flora->plant_part}}">{{$toxicity->natural->flora->plant_part}}</option>
            <option value = "Branches"> Branches </option>
            <option value = "Bulbs">    Bulbs    </option>
            <option value = "Flowers">  Flowers  </option>
            <option value = "Leaves">   Leaves   </option>
            <option value = "pods">     Pods     </option>
            <option value = "Roots">    Roots    </option>
            <option value = "Seeds">    Seeds    </option>
            <option value = "Stems">    Stems    </option>
            <option value = "Twigs">    Twigs    </option>
         </select>
        
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
            <select  class="form-control" name="area" id="" value="">
                <option value="{{$incident->area}}">{{$incident->area}}</option>
                <option value = "Chankanai">      Chankanai       </option>
                <option value = "Chavakachcheri"> Chavakachcheri  </option>
                <option value = "Delft">          Delft           </option>
                <option value = "Jaffna">         Jaffna          </option>
                <option value = "Karainagar">     Karainagar      </option>
                <option value = "Karaveddy">      Karaveddy       </option>
                <option value = "Kayts">          Kayts           </option>
                <option value = "Kopay">          Kopay           </option>
                <option value = "Maruthankerney"> Maruthankerney  </option>
                <option value = "Nallur">         Nallur          </option>
                <option value = "Point Pedro">    Point Pedro     </option>
                <option value = "Sandilipay">     Sandilipay      </option>
                <option value = "Tellippalai">    Tellippalail    </option>
                <option value = "Uduvil">         Uduvil          </option>
                <option value = "Velanai">        Velanai         </option>
                <option value = "Outside Jaffna District"> Outside Jaffna District </option>
         </select>
        </div>
   </div>
</div>

<div class="row"> 
<div class="col">
        <div class="form-group">
        <label for="validationCustom02">Amount :</label>
      <input type="number" name="amount" class="form-control"  value="{{$toxicity->natural->flora->amount}}">
   
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
         <select  class="form-control"  id="" value="" name="circumstance">
                <option value="{{$toxicity->natural->flora->circumstance}}">{{$toxicity->natural->flora->circumstance}}</option>
                <option value = "Accidental">   Accidental   </option>
                <option value = "Homicidal">    Homicidal    </option>
                <option value = "Occupational"> Occupational </option>
                <option value = "Sucidal">      Suicidal     </option>
         </select>
        </div>
   </div>

</div>

<div class="row">
     <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Mode of poisoning :</label>
         <select  class="form-control" id="" value="" name="poisoning_mode">
                <option value = "{{$toxicity->natural->flora->poisoning_mode}}" >{{$toxicity->natural->flora->poisoning_mode }}</option>
                <option value = "Contact">    Contact   </option>
                <option value = "Ingestion">  Ingestion  </option>
                <option value = "Inhalation"> Inhalation </option>
                <option value = "Others">     Others </option>
         </select>
        </div>
    </div>
    </div>
 <br><br>

 <h3 class="font-weight-bold">Clinical Features</h3>
 <br>
@if($incident->toxicity->name =='Aththana')

   
 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id ="test1" type="checkbox" name = "Clinical[]"   value="30" @if($symptoms->contains(30)) checked @endif> 
            
            <label class="form-check-label" for="test1">
               &nbsp;   Cycloplegia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id = "test2" type="checkbox" name = "Clinical[]"   value="42" @if($symptoms->contains(42)) checked @endif >
            <label class="form-check-label" for="test2">
            &nbsp; Dry mouth
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id="test3" type="checkbox" name = "Clinical[]"  value="48" @if($symptoms->contains(48)) checked @endif>
            <label class="form-check-label" for="test3">
            &nbsp;   Erythema
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id="test4" type="checkbox" name = "Clinical[]"  value="54" @if($symptoms->contains(54)) checked @endif>
            <label class="form-check-label" for="test4">
            &nbsp;  Fever
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id="test5" type="checkbox" name = "Clinical[]"   value="86" @if($symptoms->contains(86)) checked @endif>
            <label class="form-check-label" for="test5">
            &nbsp;  Mydriasis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" id="test6" type="checkbox" name = "Clinical[]"   value="132" @if($symptoms->contains(132)) checked @endif>
            <label class="form-check-label" for="test6">
            &nbsp;     Tachycardia 
            </label>
            </div>
        </div>
   </div>
</div>

 <br><br>

 <h4 class="font-weight-bold">CNS effects :</h4>
 <br>
     <select  class="form-control" id="" value="" name="Clinical[]">
                <option value = "@if($symptoms->contains(3)) 3 @elseif($symptoms->contains(22)) 22  
                @elseif($symptoms->contains(23)) 23 @else 38 @endif" >  @if($symptoms->contains(3)) Agitation @elseif($symptoms->contains(22)) Combative  
                @elseif($symptoms->contains(23)) Confusion @else disorientation @endif  </option>
                <option value = "3">  Agitation   </option>
                <option value = "22"> Combative  </option>
                <option value = "23"> Confusion </option>
                <option value = "38"> disorientation </option>
         </select>



@elseif($incident->toxicity->name =='Divikaduru')
  
    <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" name = "Clinical[]"   type="checkbox"  value="30" @if($symptoms->contains(30)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cycloplegia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Convulsion 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="32" @if($symptoms->contains(32)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Delirium
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="37" @if($symptoms->contains(37)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dilation of pupils
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="39" @if($symptoms->contains(39)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Disturbance of consciousnessvalue  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="43" @if($symptoms->contains(43)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Dryness of mucous membrane 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="51" @if($symptoms->contains(51)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Eye inflammation 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="55" @if($symptoms->contains(55)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Fits 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="56" @if($symptoms->contains(56)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;      Fits of crying  
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="57" @if($symptoms->contains(57)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Flushing of face 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="63" @if($symptoms->contains(63)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Hallucinogenic_effects     
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="111" @if($symptoms->contains(111)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Psychomotor_disturbances 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="133" @if($symptoms->contains(133)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Talkativeness 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="136" @if($symptoms->contains(136)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Thirst
            </label>
            </div>
        </div>
   </div>
 
   <div class="col">
        <div class="form-group">
         </div> 
        </div>
</div>





@elseif($incident->toxicity->name =='DiyaKaduru')

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal_pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Diarrhoea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="46" @if($symptoms->contains(46)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Electrolytes imbalance
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="93" @if($symptoms->contains(93)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Numbness and burning of mouth   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Vomiting
            </label>
            </div>
        </div>
   </div>
</div>
 
<br><br>

<h3 class="font-weight-bold">CVS</h3>
<br>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="352" @if($symptoms->contains(352)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; 1st Degree HB
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="353" @if($symptoms->contains(353)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  2nd Degree HB 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="9" @if($symptoms->contains(9)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;      Atrial and ventricular ectopics 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="80" @if($symptoms->contains(80)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Junctional rhythms     
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="111" @if($symptoms->contains(127)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Sinoatrial_block 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="128" @if($symptoms->contains(128)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Sinus bradycardia 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="129" @if($symptoms->contains(129)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Slow pulse
            </label>
            </div>
        </div>
   </div>
 
   <div class="col">
        <div class="form-group">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="143" @if($symptoms->contains(143)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Ventricular fibrillation 
            </label>
            </div>
         </div> 
        </div>
</div>



@elseif($incident->toxicity->name =='Endaru')

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal_pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="2" @if($symptoms->contains(2)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Acute renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="5" @if($symptoms->contains(5)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Anaphylaxis
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Convulsion
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="28" @if($symptoms->contains(28)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Cramps  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="31" @if($symptoms->contains(31)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Dehydration
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="46" @if($symptoms->contains(46)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Electrolytes imbalance 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="60" @if($symptoms->contains(60)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Haematuria
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="66" @if($symptoms->contains(66)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hepatic Necrosis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="73" @if($symptoms->contains(73)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypoglycemia  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Nausea
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="119" @if($symptoms->contains(119)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Retinal Haemorrhage
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="126" @if($symptoms->contains(126)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Shock  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Vomiting
            </label>
            </div>
        </div>
   </div>
</div>

<br><br>


<br><br>

<h3 class="font-weight-bold">Inhalation</h3>
<br>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="27" @if($symptoms->contains(27)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Cough
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="54" @if($symptoms->contains(54)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Fever
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="9" @if($symptoms->contains(77)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;      Hypoxaemia
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  readonly value="113" @if($symptoms->contains(113)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Pulmonary oedema
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="116" @if($symptoms->contains(116)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Respiratory distress 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="146" @if($symptoms->contains(146)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Weakness   
            </label>
            </div>
        </div>
        </div>
  
</div>



@elseif($incident->toxicity->name =='GodaKaduru')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="15" @if($symptoms->contains(15)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Bulging eyes
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="28" @if($symptoms->contains(28)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Cramps
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="29" @if($symptoms->contains(29)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Cyanosis
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="37" @if($symptoms->contains(37)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dilation of pupils 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="49" @if($symptoms->contains(49)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Extensor spasms  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="69" @if($symptoms->contains(69)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hyperreflexia
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="71" @if($symptoms->contains(71)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hyperthermia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="84" @if($symptoms->contains(84)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Metabolic acidosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="85" @if($symptoms->contains(85)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Muscle twitching
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="88" @if($symptoms->contains(88)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Myoglobinuria
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="99" @if($symptoms->contains(99)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Opisthotonus  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="102" @if($symptoms->contains(102)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Painful convulsions
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="104" @if($symptoms->contains(104)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Pancreatitis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="112" @if($symptoms->contains(112)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Pulmonary infiltration 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="114" @if($symptoms->contains(114)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Renal failure
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="117" @if($symptoms->contains(117)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory failure
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="121" @if($symptoms->contains(121)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Rhabdomyolysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="123" @if($symptoms->contains(123)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Risus sardonicus
            </label>
            </div>
        </div>
   </div>
</div>


@elseif($incident->toxicity->name =='Habarala')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"name = "Clinical[]"   value="6" @if($symptoms->contains(6)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anuria 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="8" @if($symptoms->contains(8)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Aphonia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="12" @if($symptoms->contains(12)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Blisters of oral mucosa
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="13" @if($symptoms->contains(13)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Bradycardia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="16" @if($symptoms->contains(16)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning sensation  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Convulsion
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="44" @if($symptoms->contains(44)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dysphagia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="61" @if($symptoms->contains(61)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemorrhagic gastritis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="78" @if($symptoms->contains(78)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Impaired articulation 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="90" @if($symptoms->contains(90)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Necrosis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="91" @if($symptoms->contains(91)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Necrotic oesophagitis  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="98" @if($symptoms->contains(98)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Oliguria
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="100" @if($symptoms->contains(100)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Oral cavity irritation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="101" @if($symptoms->contains(101)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Pain  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="109" @if($symptoms->contains(109)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Profuse salivation
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="114" @if($symptoms->contains(114)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Renal failure 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="138" @if($symptoms->contains(138)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Tremor  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
          
        </div>
   </div>
</div>


<br><br>

<h4 class="font-weight-bold">Hypocalcemia</h4>
<br>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="19" @if($symptoms->contains(19)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Circumoral paresthesia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="85" @if($symptoms->contains(85)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Muscle twitching
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="139" @if($symptoms->contains(139)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;      Trismus
            </label>
            </div>
        </div>
   </div>
</div>

<br><br>

<h4 class="font-weight-bold">Oedema of the </h4>
<br>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="93" @if($symptoms->contains(93)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Mouth
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="94" @if($symptoms->contains(94)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Lips
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="95" @if($symptoms->contains(95)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Salivary glands   
            </label>
            </div>
        </div>
        </div>
  
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="96" @if($symptoms->contains(96)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Throat
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        
        </div>
        </div>
        
</div>

<br><br>

<h4 class="font-weight-bold">Eye contact</h4>
<br>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="11" @if($symptoms->contains(11)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Blepharospasm
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="24" @if($symptoms->contains(24)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Conjunctival chemosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="26" @if($symptoms->contains(26)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Corneal abrasions   
            </label>
            </div>
        </div>
        </div>
  
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="52" @if($symptoms->contains(52)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Eyelid oedema
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="79" @if($symptoms->contains(79)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Intense pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="106" @if($symptoms->contains(106)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Photophobia  
            </label>
            </div>
        </div>
        </div>
  
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="145" @if($symptoms->contains(145)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Watery eyes
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        
        </div>
        </div>
  
</div>


@elseif($incident->toxicity->name =='Hondala')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="40" @if($symptoms->contains(40)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Dizziness
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="37" @if($symptoms->contains(37)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Exudate
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="54" @if($symptoms->contains(54)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Fever
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="70" @if($symptoms->contains(70)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hypersensitivity reactions 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="92" @if($symptoms->contains(92)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Necrotising enteritis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="87" @if($symptoms->contains(87)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Myocarditis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="105" @if($symptoms->contains(105)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Papilloedema 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="118" @if($symptoms->contains(118)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Restlessness
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="120" @if($symptoms->contains(120)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Retinopathy  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="122" @if($symptoms->contains(122)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Right iliac fossa tenderness
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="134" @if($symptoms->contains(134)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Tender liver
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Vomiting  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
           
        </div>
   </div>
</div>


@elseif($incident->toxicity->name =='Kaneru')



 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal_pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="7" @if($symptoms->contains(7)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Anxiety 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="13" @if($symptoms->contains(13)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Bradycardia
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="17" @if($symptoms->contains(17)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  burning sensation of mouth 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="21" @if($symptoms->contains(21)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Coma   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Convulsion
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="46" @if($symptoms->contains(46)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Electrolytes imbalance   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hypotension
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="118" @if($symptoms->contains(118)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Restlessness   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="135" @if($symptoms->contains(135)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Tenderness
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="141" @if($symptoms->contains(141)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ventricular arrhythmia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="142" @if($symptoms->contains(142)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Ventricular ectopics  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="147" @if($symptoms->contains(147)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Yellow vision 
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Vomiting
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
         
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            
        </div>
   </div>
</div>




 
<br><br>

<h3 class="font-weight-bold">HB</h3>
<br>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="352" @if($symptoms->contains(352)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; 1st Degree Heart Block
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="353" @if($symptoms->contains(353)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  2nd Degree  Heart Block
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="399" @if($symptoms->contains(399)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;      3rd Degree  Heart Block
            </label>
            </div>
        </div>
   </div>
</div>


@elseif($incident->toxicity->name =='Kepunkiriya')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="349" @if($symptoms->contains(349)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Burning sensation of throat
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="20" @if($symptoms->contains(20)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   CNS depression
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="31" @if($symptoms->contains(31)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dehydration
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="41" @if($symptoms->contains(41)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Drowsiness
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="45" @if($symptoms->contains(45)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ecg abnormalities
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="62" @if($symptoms->contains(62)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemorrhagic gastroententis   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="68" @if($symptoms->contains(68)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hyperpnoea
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="107" @if($symptoms->contains(107)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Polydipsia
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="124" @if($symptoms->contains(124)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Salivation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="130" @if($symptoms->contains(130)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Sweating 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Vomiting
            </label>
            </div>
        </div>
   </div>
</div>



@elseif($incident->toxicity->name =='Niyagala')


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="2" @if($symptoms->contains(2)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Acute renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="4" @if($symptoms->contains(4)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Alopecia
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="10" @if($symptoms->contains(10)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Bleeding manifestations
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="18" @if($symptoms->contains(18)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Cardiac arrhythmias  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="21" @if($symptoms->contains(21)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Coma
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="23" @if($symptoms->contains(23)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Confusion
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Convulsion
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="31" @if($symptoms->contains(31)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Dehydration
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="46" @if($symptoms->contains(46)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Electrolytes imbalance    
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="58" @if($symptoms->contains(58)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Gastroenteritis
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="65" @if($symptoms->contains(65)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hepatic insufficiency
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Hypotension 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="72" @if($symptoms->contains(72)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hypocalcemia
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="75" @if($symptoms->contains(75)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypovolaemia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="84" @if($symptoms->contains(84)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Metabolic acidosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Nausea
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="108" @if($symptoms->contains(108)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Polyneuropathy
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="115" @if($symptoms->contains(115)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Respiratory depression 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="121" @if($symptoms->contains(121)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Rhabdomyolysis
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="126" @if($symptoms->contains(126)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Shock
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Vomiting 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
           
        </div>
   </div>
</div>

@elseif($incident->toxicity->name =='Olinda')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"  value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="2" @if($symptoms->contains(2)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Acute renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="25" @if($symptoms->contains(25)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Convulsion
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="33" @if($symptoms->contains(33)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Demyelination  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="41" @if($symptoms->contains(41)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Drowsiness
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="59" @if($symptoms->contains(59)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haematemesis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="67" @if($symptoms->contains(67)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hepatotoxicity
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="73" @if($symptoms->contains(73)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Hypoglycemia
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="76" @if($symptoms->contains(76)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypovolemic shock
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="83" @if($symptoms->contains(83)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Malena   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Nausea
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="103" @if($symptoms->contains(103)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Pallor
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="119" @if($symptoms->contains(119)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Retinal haemorrhage
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="135" @if($symptoms->contains(135)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Tenderness
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Vomiting
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            
        </div>
   </div>

   <div class="col">
        <div class="form-group">
           
        </div>
   </div>
</div>



@elseif($incident->toxicity->name =='Unknown plant poisoning')
    <div class="form-group">
      <textarea class="form-control" rows="5" name="Unknown_plant" id="comment" >{{$incident->symptom_others}} </textarea>
    </div> 
 @endif


<br><br>
@if($incident->toxicity->name !='Unknown plant poisoning')
<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" name="symptom_others">{{$incident->symptom_others}} </textarea>
</div> 
 @endif



<br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>
 
    
 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="3" @if($management->contains(3)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Alkalinization
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" id="gridCheck"  value="4" @if($management->contains(4)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="5" @if($management->contains(5)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Antibiotics given 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="6" @if($management->contains(6)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Anticonvulsants given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="9" @if($management->contains(9)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Atropine given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="10" @if($management->contains(10)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Blood transfusion/Plasma expanders  
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="11" @if($management->contains(11)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Calcium gluconate given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="13" @if($management->contains(13)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Dialysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="14" @if($management->contains(14)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Dopamine given 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="20" @if($management->contains(20)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Methylprednisolone/Corticosteroids
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="21" @if($management->contains(21)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  NaCl given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="22" @if($management->contains(22)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  NaHCO3 given
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="24" @if($management->contains(24)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Prednisalone given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="26" @if($management->contains(26)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Resuscitation
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="29" @if($management->contains(29)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Supportive therapy  
            </label>
            </div>
        </div>
   </div>
</div>
<br><br>


 

<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" name = "managements_others" id="comment" >{{$incident->management_others}}</textarea>
</div> 

<h3 class="font-weight-bold">Gastrointestinal decontamination : </h3>
 <br>

    <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="15" @if($management->contains(15)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Gastric aspiration 
            </label>
            </div>
        </div>
   </div>
   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="1" @if($management->contains(1)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Activated chracol      
            </label>
           
            </div>
        </div>
   </div>

   <label class="form-check-label" for="gridCheck">
            &nbsp; &nbsp; If yes, number of doses       
    </label>
            <div class="col">      
                <input  class="form-control" type="number" name = "activated_chracol_doses" value="{{$flora->activated_chracol_doses}}"> 
            </div>
            <br>

   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="7" @if($management->contains(7)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Antidote given
            </label>
            </div>
        </div>
   </div>

   <label class="form-check-label" for="gridCheck">
            &nbsp; &nbsp; If yes, type of antidote      
    </label>
            <div class="col">      
                <input  class="form-control" type="text" name = "antidote" value=" {{$flora->antidote}}">
     </div>












<br><br>
  <h3 class="font-weight-bold">laboratory detail</h3>
<br>
 
 <div class="form-group"> 
    <textarea class="form-control" rows="5" name="details" >{{$incident->laboratory->details}}</textarea>
 </div> 


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" name = "comments" rows="5" >{{$incident->comments}}</textarea>
</div> 
<input type="hidden" name="recordid" value="{{$incident->id}}">
<br>
<button class="btn btn-primary" type="submit" name ="save" value="save" >Save</button> 
<button class="btn btn-success" type="submit"  name ="submit" value="save">Submit</button> 
</form>
<br><br>





<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    
    
    
    
    
    
    
    
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

