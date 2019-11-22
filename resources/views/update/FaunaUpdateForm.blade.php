<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$incident->toxicity->name}}   </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <br><br><br>
 
   <h1  class="font-weight-bold" align="center"> {{$incident->toxicity->name}}  </h1>
 <div class="container">
    <br><br>
 
 <h3 class="font-weight-bold">Personel Detail</h3>
  <br>
 
 <form action="/update/{{$incident->id}}" enctype="multipart/form-data" method ="post">
@csrf   
@method('PATCH') 
 
<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">First Name : </label>
        <input type="text" name = "fname" class="form-control" id="validationCustom01" value="{{$patient->fname}}" pattern="[A-Za-z]{1,}" title="Please Enter Alphabet Letter">
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Last Name : </label>
      <input type="text"  name = "lname"  class="form-control" id="validationCustom02" value="{{$patient->lname}}" pattern="[A-Za-z]{1,}" title="Please Enter Alphabet Letter">
   
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">PHN : </label>
        <input type="number" name = "phn"  class="form-control" id="validationCustom01" value="{{$patient->phn}}" >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> BirthDay : </label>
      <input type="Date" name = "bday"  class="form-control" id="validationCustom02" value="{{$patient->bdate}}" >
   
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">NIC : </label>
        <input type="text" name = "nic"  class="form-control" maxlength="10"id="validationCustom01" value="{{$patient->nic}}" >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Address : </label>
      <input type="text"  name = "address" class="form-control" id="validationCustom02" value="{{$patient->address}}" >
    
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Gender : </label>
        <select name = "gender" class="form-control">
            @if($patient->gender != null){
                     <option value = "{{$patient->gender}}"> {{$patient->gender}} </option>
                }
                @else{
                     <option value = " "> ..Please choose one option.. </option>
                }
                @endif

                 @if($patient->gender != 'Male'){
                     <option value = "Male"> Male </option>
                }
                @endif
                @if($patient->gender != 'Female'){
                     <option value = "Female"> Female  </option>
                }@endif

         </select>                   
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact : </label>
      <input type="tel" name = "contact" placeholder="Enter phone number" maxlength ="10" maxlength="10" pattern="" class="form-control" id="validationCustom02" value="{{$patient->contact}}" >
   
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
        <input type="date" class="form-control" name ="date" value ="{{$incident->date}}" >
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Time : </label>
           <input type="time" class="form-control" name="time" value="{{$incident->time}}" >
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting : </label>
             <select class="form-control"  onchange='otherbiteplace(this.value)' name = "place_of_sting" value="{{$toxicity->natural->fauna->place_of_sting}}" >
                @if($toxicity->natural->fauna->place_of_sting != null){
                     <option value = "{{$toxicity->natural->fauna->place_of_sting}}"> {{$toxicity->natural->fauna->place_of_sting}} </option>
                }
                @else{
                     <option value = " "> ..Please choose one option.. </option>
                }
                @endif
                
                @if($toxicity->natural->fauna->place_of_sting != 'Forest'){
                     <option value = "Forest"> Forest </option>
                }
                @endif
                @if($toxicity->natural->fauna->place_of_sting != 'Garden'){
                     <option value = "Garden"> Garden  </option>
                }@endif
                @if($toxicity->natural->fauna->place_of_sting != 'Indoor'){
                    <option value = "Indoor"> Indoor </option>
                }@endif
                
                @if($toxicity->natural->fauna->place_of_sting != 'Paddy-field'){
                    <option value = "Paddy-field"> Paddy-field </option>
                }@endif
                @if($toxicity->natural->fauna->place_of_sting != 'Road'){
                    <option value = "Road"> Road </option>
                }@endif
                @if($toxicity->natural->fauna->place_of_sting != 'Roots'){
                     <option value = "Roots"> Roots </option>
                }@endif
                @if($toxicity->natural->fauna->place_of_sting != 'Unutilized land'){
                     <option value = "Unutilized land"> Unutilized land </option>
                }
                @endif
                
                <option value = "others"> Others </option>
                <option value = " "> < Empty  > </option>
               
                
          </select>
         </div>
   </div>

<script>
  function otherbiteplace(val){
    var element=document.getElementById('placeofbite');
    if(val=='others')
    element.style.display='block';
    else  
    element.style.display='none';
}

</script>


   <div class="col" id="placeofbite" style='display:none;'>
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting  others, specify: </label>
            <input type="text" class="form-control" name="place_of_sting_others" value=""  >
         </div>
   </div>
</div>


<div class="row"> 
  <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
        <select name = "area" class="form-control" onchange='otherarea(this.value)' >
             @if($incident->area != null){
                     <option value = "{{$incident->area}}"> {{$incident->area}} </option>
                }
                @else{
                     <option value = " "> ..Please choose one option.. </option>
                }
                @endif

             
            @if($incident->area != 'Chankanai')
                <option value = "Chankanai"> Chankanai </option>
            @endif
            @if($incident->area != 'Chavakachcheri')
                <option value = "Chavakachcheri"> Chavakachcheri  </option>
            @endif
            @if($incident->area != 'Delft')
                <option value = "Delft"> Delft  </option>
            @endif
            @if($incident->area != 'Jaffna')
                <option value = "Jaffna"> Jaffna  </option>
            @endif
            @if($incident->area != 'Karainagar')
                <option value = "Karainagar"> Karainagar  </option>
            @endif
            @if($incident->area != 'Karaveddy')
                <option value = "Karaveddy"> Karaveddy  </option>
            @endif
            @if($incident->area != 'Kayts')
                <option value = "Kayts"> Kayts  </option>
            @endif
            @if($incident->area != 'Kopay')
                <option value = "Kopay"> Kopay  </option>
            @endif
            @if($incident->area != 'Maruthankerney')
                <option value = "Maruthankerney"> Maruthankerney  </option>
            @endif
            @if($incident->area != 'Nallur')
                <option value = "Nallur"> Nallur  </option>
            @endif
            @if($incident->area != 'Point Pedro')
                <option value = "Point Pedro"> Point Pedro  </option>
            @endif
            @if($incident->area != 'Sandilipay')
                <option value = "Sandilipay"> Sandilipay  </option>
            @endif
            @if($incident->area != 'Tellippalai')
                <option value = "Tellippalai"> Tellippalail  </option>
            @endif
            @if($incident->area != 'Uduvil')
                <option value = "Uduvil"> Uduvil  </option>
            @endif
            @if($incident->area != 'Velanai')
                <option value = "Velanai"> Velanai  </option>
            @endif
            @if($incident->area != 'Outside Jaffna District')
                <option value = "Outside Jaffna District"> Outside Jaffna District </option>
            @endif
           
            <option value = "others"> Others </option>
            <option value = " "> < Empty  > </option>
        </select>
       
        </div>
   </div>

   <div class="col" id="area" style='display:none;'>
        <div class="form-group">
            <label for="validationCustom04">Area  others, specify: </label>
            <input type="text" class="form-control" name="area_of_others" value=""  >
         </div>
   </div>
</div>

<script>
  function otherarea(val){
    var element=document.getElementById('area');
    if(val=='others')
    element.style.display='block';
    else  
    element.style.display='none';
}

</script>



<div class="row"> 
<div class="col">
        <div class="form-group">
        <label for="validationCustom02">Number Of String :</label>
         <input type="number" min = "0" class="form-control" name="number_of_stings" value="{{$toxicity->natural->fauna->number_of_stings}}" >
          
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
             <select name="circumstance" class="form-control">
               @if($toxicity->natural->fauna->circumstance != null){
                   <option value = "{{$toxicity->natural->fauna->circumstance}}"> {{$toxicity->natural->fauna->circumstance}} </option>
                }
                @else{
                   <option value = " "> ..Please choose one option.. </option>
                }
                @endif
                @if($toxicity->natural->fauna->circumstance != 'Provoked')
                    <option value = "Provoked">  Provoked   </option>
                @endif
                @if($toxicity->natural->fauna->circumstance != 'Unprovoked' )
                    <option value = "Unprovoked"> Unprovoked </option>
                @endif
            </select>
        </div>
   </div>

</div>

<div class="row">
     <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Bite site/Sting site :</label>

          <select name="sting_site" class="form-control"  onchange='othersite(this.value)'>
                @if($toxicity->natural->fauna->sting_site != null){
                   <option value = "{{$toxicity->natural->fauna->sting_site}}"> {{$toxicity->natural->fauna->sting_site}} </option>
                }
                @else{
                   <option value = " "> ..Please choose one option.. </option>
                }
                @endif

            @if($toxicity->natural->fauna->sting_site != 'Abdomen'){
                <option value = "Abdomen"> Abdomen </option>
            @endif
            @if($toxicity->natural->fauna->sting_site != 'Foot & ankle'){
                <option value = "Foot & ankle"> Foot & ankle </option>
            @endif
            @if($toxicity->natural->fauna->sting_site != 'Head & Neck'){
                <option value = "Head & Neck">  Head & Neck   </option>
            @endif
            @if($toxicity->natural->fauna->sting_site != 'Leg'){
                <option value = "Leg"> Leg </option>
            @endif
            @if($toxicity->natural->fauna->sting_site != 'Upper Limb'){
                <option value = "Upper Limb"> Upper Limb </option>
            @endif
            <option value = "others"> Others </option>
            <option value = " "> < Empty  > </option>
        </select>
 
        </div>
    </div>

    <div class="col" id="bitesite" style='display:none;'>
        <div class="form-group">
         <label for="validationCustom02">Bite site/Sting site  others, specify  :</label>
         <input type="text" class="form-control" name="sting_site_others" value="" >
        </div>
    </div>
    </div>

<script>
  function othersite(val){
    var element=document.getElementById('bitesite');
    if(val=='others')
    element.style.display='block';
    else  
    element.style.display='none';
}

</script>



 <br><br>

 <h3 class="font-weight-bold">Clinical Features</h3>
 <br>
 
@if($incident->toxicity->name =='Bee, Wasp, Hornet Stings')
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" name = "Clinical[]" type="checkbox"  name = "Clinical[]"  value="14" @if($symptoms->contains(14)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Bronchospasm
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="53" @if($symptoms->contains(53)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Facial oedema
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Diarrhoea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="81" @if($symptoms->contains(81)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Laryngeal oedema 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="82" @if($symptoms->contains(82)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Malaise
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="98" @if($symptoms->contains(98)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Oliguria
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="110" @if($symptoms->contains(110)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  BPruritus
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="114" @if($symptoms->contains(114)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="121" @if($symptoms->contains(121)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Rhabdomyolysis
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="259" @if($symptoms->contains(259)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Seizures
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="166" @if($symptoms->contains(166)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Serum sickness
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="131" @if($symptoms->contains(131)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Swelling
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="137" @if($symptoms->contains(137)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tightness of chest
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="140" @if($symptoms->contains(140)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Urticaria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Vomiting
            </label>
            </div>
        </div>
   </div>
</div>











@elseif($incident->toxicity->name =='Black Widow Spider')
    <div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(1)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="170" @if($symptoms->contains(170)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Coagulopathy
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="163" @if($symptoms->contains(163)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Convulsions
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="171" @if($symptoms->contains(171)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cramping truncal pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="169" @if($symptoms->contains(169)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemoglobinuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="173" @if($symptoms->contains(173)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Headache
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="175" @if($symptoms->contains(175)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Hyperaesthesia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="157" @if($symptoms->contains(157)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypertension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="54" @if($symptoms->contains(54)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Fever
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="167" @if($symptoms->contains(167)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Local necrosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="172" @if($symptoms->contains(172)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Muscle spasm
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Nausea
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="101" @if($symptoms->contains(101)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="176" @if($symptoms->contains(176)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ptosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="114" @if($symptoms->contains(114)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   	Renal failure
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="118" @if($symptoms->contains(118)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Restlessness
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="124" @if($symptoms->contains(124)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Salivation
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="168" @if($symptoms->contains(168)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Scarlatiniform rash
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="130" @if($symptoms->contains(130)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Sweating
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="131" @if($symptoms->contains(131)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Swelling
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="174" @if($symptoms->contains(174)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Tachypnoea
            </label>
            </div>
        </div>
   </div>
</div><div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="140" @if($symptoms->contains(140)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Urticaria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Vomiting
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="146" @if($symptoms->contains(146)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Weakness
            </label>
            </div>
        </div>
   </div>
</div>


@elseif($incident->toxicity->name == 'Blister Beetle Ingestion')
     <div class="row">
         <div class="col">
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(1)) checked @endif>

                     <label class="form-check-label" for="gridCheck">
                         &nbsp; Abdominal pain
                     </label>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif >
                     <label class="form-check-label" for="gridCheck">
                         &nbsp;  Vomiting
                     </label>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="146" @if($symptoms->contains(146)) checked @endif>
                     <label class="form-check-label" for="gridCheck">
                         &nbsp;   Weakness
                     </label>
                 </div>
             </div>
         </div>
     </div>



@elseif($incident->toxicity->name =='Blister Beetle Ingestion')


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="17" @if($symptoms->contains(17)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning sensation of mouth 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="376" @if($symptoms->contains(376)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Cardiac abnormalities
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="380" @if($symptoms->contains(380)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cranial nerve palsy
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="367" @if($symptoms->contains(367)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Dark coloured urine
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="359" @if($symptoms->contains(359)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Disseminated intravascular coagulation
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="44" @if($symptoms->contains(44)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Dysphagia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="371" @if($symptoms->contains(371)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dysuria 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="370" @if($symptoms->contains(370)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Gross haematuria
            </label>
            </div>
        </div>
   </div>
</div>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="59" @if($symptoms->contains(59)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Haematemesis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="337" @if($symptoms->contains(337)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemorrhage 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="383" @if($symptoms->contains(383)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Keratoconjunctivitis
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="372" @if($symptoms->contains(372)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Mucosal erosion 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="378" @if($symptoms->contains(378)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Occult rectal bleeding
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="382" @if($symptoms->contains(382)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Periorbital dermatitis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="375" @if($symptoms->contains(375)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Priapism 
            </label>
            </div>
        </div>
   </div>371

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="381" @if($symptoms->contains(381)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Progressive muscle weakness
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="373" @if($symptoms->contains(373)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Renal dysfunction
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory failure 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="377" @if($symptoms->contains(377)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Vaginal bleeding 
            </label>
            </div>
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
           
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
         
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="125" @if($symptoms->contains(125)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Seizure
            </label>
            </div>
        </div>
   </div>
</div>


@elseif($incident->toxicity->name =='Centipede Bite')

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="101" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Redness 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="131" @if($symptoms->contains(131)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Swelling
            </label>
            </div>
        </div>
   </div>
</div>




@elseif($incident->toxicity->name =='Jelly Fish')

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="183" @if($symptoms->contains(183)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Anaphylactoid 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="186" @if($symptoms->contains(186)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Arthralgia
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="197" @if($symptoms->contains(197)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Ataxia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="18" @if($symptoms->contains(18)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Cardiac arrhythmias 
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="193" @if($symptoms->contains(193)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Chills
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="21" @if($symptoms->contains(21)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Coma 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="29" @if($symptoms->contains(29)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="192" @if($symptoms->contains(192)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Desquamation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="34" @if($symptoms->contains(34)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Diarrhoea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="189" @if($symptoms->contains(189)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Erythematous papular lesion 
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="54" @if($symptoms->contains(54)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp; Fever
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="188" @if($symptoms->contains(188)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hemolysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Hypotension 
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="187" @if($symptoms->contains(187)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Local oedema
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="172" @if($symptoms->contains(172)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Muscle spasm 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="185" @if($symptoms->contains(185)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Myalgia
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="182" @if($symptoms->contains(182)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Paraesthesia 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="113" @if($symptoms->contains(113)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Pulmonary oedema 
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="181" @if($symptoms->contains(181)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Rash
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="125" @if($symptoms->contains(125)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Seizure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="180" @if($symptoms->contains(180)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Shooting pain
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="178" @if($symptoms->contains(178)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Stinging 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="179" @if($symptoms->contains(179)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Throbbing 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Vomiting
            </label>
            </div>
        </div>
   </div>
</div>


@elseif($incident->toxicity->name =='Scorpion Bite')


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="5" @if($symptoms->contains(5)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anaphylaxis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="355" @if($symptoms->contains(355)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Ecchymoses
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="207" @if($symptoms->contains(207)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Lymphangitis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="131" @if($symptoms->contains(131)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Swelling
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            
            </div>
        </div>
   </div>
</div>



@elseif($incident->toxicity->name =='Snake bite')


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="2" @if($symptoms->contains(2)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Acute renal failure 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="208" @if($symptoms->contains(208)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Blisters
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="359" @if($symptoms->contains(359)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Disseminated intravascular coagulation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="248" @if($symptoms->contains(248)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hematuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="354" @if($symptoms->contains(354)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Hemoglobinuria
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="74" @if($symptoms->contains(74)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Hypotension
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="167" @if($symptoms->contains(167)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Local necrosis 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="98" @if($symptoms->contains(98)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Oliguria
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="101" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="336" @if($symptoms->contains(336)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Proteinuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="121" @if($symptoms->contains(121)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Rhabdomyolysis
            </label>
            </div>
        </div>
   </div>
</div>



<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="131" @if($symptoms->contains(131)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Swelling
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Vomiting
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">       
            </div>
        </div>
   </div>
</div>


<br><br>
 <h4 class="font-weight-bold">Haematological</h4>
 <br>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="278" @if($symptoms->contains(278)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Blood stained vomitus
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="355" @if($symptoms->contains(355)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ecchymoses
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="330" @if($symptoms->contains(330)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Gum bleeding 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="335" @if($symptoms->contains(335)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Intracranial haemorrhages
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="298" @if($symptoms->contains(298)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Melaena
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="324" @if($symptoms->contains(324)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Per rectal bleeding 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="247" @if($symptoms->contains(247)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Purpura
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
 <h4 class="font-weight-bold">Neurological manifestations</h4>
 <br>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="210" @if($symptoms->contains(210)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Areflexia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="213" @if($symptoms->contains(213)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Double vision
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="41" @if($symptoms->contains(41)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Drowsiness
            </label>
            </div>
        </div>
   </div>
</div>
<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="44" @if($symptoms->contains(44)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Dysphagia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="214" @if($symptoms->contains(214)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  External ophthalmoplegia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="209" @if($symptoms->contains(209)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Facial muscle weakness
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="176" @if($symptoms->contains(176)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Ptosis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="211" @if($symptoms->contains(211)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory paralysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="212" @if($symptoms->contains(212)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Visual disturbances 
            </label>
            </div>
        </div>
   </div>
</div>



@elseif($incident->toxicity->name =='Turtle Flesh Poisoning')

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="364" @if($symptoms->contains(364)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Burning sensation of lips
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="17" @if($symptoms->contains(17)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning sensation of mouth
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="349" @if($symptoms->contains(349)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Burning sensation of throat 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="363" @if($symptoms->contains(363)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Cold extremities
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="21" @if($symptoms->contains(21)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Coma
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="163" @if($symptoms->contains(163)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Convulsions 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "Clinical[]"  value="41" @if($symptoms->contains(41)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Drowsiness
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="47" @if($symptoms->contains(47)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Epigastric pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="365" @if($symptoms->contains(365)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pustular papillae
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="300" @if($symptoms->contains(300)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Stomatitis
            </label>
            </div>
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="130" @if($symptoms->contains(130)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Sweating
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="132" @if($symptoms->contains(132)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Tachycardia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="366" @if($symptoms->contains(366)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ulcerg 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "Clinical[]" value="360" @if($symptoms->contains(360)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Vertigo
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "Clinical[]" value="144" @if($symptoms->contains(144)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Vomiting 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
         
            </div>
        </div>
   </div>
</div>



@elseif($incident->toxicity->name =='Unknown Bite')





@endif




<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment"  name="clinicals_others"   >{{$incident->symptom_others}} </textarea>
</div> 



<br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>
 



 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "management[]"   value="2" @if($management->contains(2)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Adrenaline
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "management[]"   value="4" @if($management->contains(4)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="41" @if($management->contains(41)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Antacids 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "management[]"   value="6" @if($management->contains(6)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anticonvulsants given  
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "management[]"   value="8" @if($management->contains(8)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Antihistamine
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="11" @if($management->contains(11)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Calcium gluconate given
            </label>
            </div>
        </div>
   </div>
</div>
    

 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "management[]"  value="16" @if($management->contains(16)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Gastric lavage
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="33" @if($management->contains(33)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hydrocortisone 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="36" @if($management->contains(36)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Hemodialysis
            </label>
            </div>
        </div>
   </div>
</div>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "management[]"  value="17" @if($management->contains(17)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Icepacks Applaid
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="40" @if($management->contains(40)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Inotropic support 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="34" @if($management->contains(34)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Nebulisation
            </label>
            </div>
        </div>
   </div>
</div>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "management[]"  value="35" @if($management->contains(35)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Peritoneal
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="31" @if($management->contains(31)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Rest the area of bite
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="26" @if($management->contains(26)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Resuscitation 
            </label>
            </div>
        </div>
   </div>
</div>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"   name = "management[]"  value="37" @if($management->contains(37)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tetanus prophylaxis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="38" @if($management->contains(38)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Topical steroids 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"   name = "management[]"  value="30" @if($management->contains(30)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Wound cleaning
            </label>
            </div>
        </div>
   </div>
</div>

<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" name ="managements_others" >{{$incident->management_others}}</textarea>
</div> 




<br><br>
 <h4 class="font-weight-bold">&nbsp;AVS :</h4>
 <br>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  name = "management[]"   value="7" @if($management->contains(7)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anti snake venom serum(AVS) given
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

<br>

 <div class="form-group">
   <p class="font-weight-bold">&nbsp;If yes, no of vials :  </p>
  <input type="number" name= "avs_vials" class="form-control" min ="0" id="comment" value="{{$toxicity->natural->fauna->avs_vials }}" ></input>
</div> 
 <br><br>
 
    





<br><br>
 <h3 class="font-weight-bold">laboratory detail</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" name="laboratory" rows="5" >{{$laboratory->comments}} </textarea>
</div> 


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" name="comments" rows="5" >{{$incident->comments}}</textarea>
</div> 

<input type="hidden" name="recordid" value="{{$incident->id}}">
<br>
<button class="btn btn-primary" type="submit" onclick="return confirm(&quot;Save the data?&quot;)" name ="save" value="save" >Save</button> 
<!--button class="btn btn-success" type="submit"  onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="save">Submit</button--> 
<br><br>
</form>

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

