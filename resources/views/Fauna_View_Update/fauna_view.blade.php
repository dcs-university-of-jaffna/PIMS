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
 <form class="needs-validation" novalidate>

 
<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">First Name : </label>
        <input type="text" class="form-control" id="validationCustom01" value="{{$patient->fname}}" readonly>
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Last Name : </label>
      <input type="text" class="form-control" id="validationCustom02" value="{{$patient->lname}}" readonly>
   
        </div>
   </div>
</div>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">PHN : </label>
        <input type="number" class="form-control" id="validationCustom01" value="{{$patient->phn}}" readonly>
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> BirthDay : </label>
      <input type="Date" class="form-control" id="validationCustom02" value="{{$patient->bdate}}" readonly>
   
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">NIC : </label>
        <input type="number" class="form-control" id="validationCustom01" value="{{$patient->nic}}" readonly >
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Address : </label>
      <input type="text" class="form-control" id="validationCustom02" value="{{$patient->address}}" readonly>
   
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Gender : </label>
        <input type="text" class="form-control" id="validationCustom01" value="{{$patient->gender}}" readonly>
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact : </label>
      <input type="number" class="form-control" id="validationCustom02" value="{{$patient->contact}}" readonly>
   
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
        <input type="text" class="form-control" value ="{{$incident->date}}" readonly>
         </div>
   </div>


   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Time : </label>
      <input type="text" class="form-control"  value="{{$incident->time}}" readonly>

        </div>
   </div>
</div>


<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting : </label>
            <input type="text" class="form-control" value="{{$toxicity->natural->fauna->place_of_sting}}"  readonly>

         </div>
   </div>

   <div class="col">
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting  others, specify: </label>
            <input type="text" class="form-control" value=""  readonly>
         </div>
   </div>
</div>


<div class="row">
  <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
        <input type="text" class="form-control" value="{{$incident->area}}" readonly>
        </div>
   </div>
</div>



<div class="row">
<div class="col">
        <div class="form-group">
        <label for="validationCustom02">Number Of String :</label>
      <input type="text" class="form-control"  value="{{$toxicity->natural->fauna->number_of_stings}}" readonly>

        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
      <input type="text" class="form-control"  value="{{$toxicity->natural->fauna->circumstance}}" readonly>

        </div>
   </div>

</div>

<div class="row">
     <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Bite site/Sting site :</label>
         <input type="text" class="form-control"  value="{{$toxicity->natural->fauna->sting_site}}" readonly>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
         <label for="validationCustom02">Bite site/Sting site  others, specify  :</label>
         <input type="text" class="form-control"  value="" readonly>
        </div>
    </div>
    </div>
 <br><br>





 <h3 class="font-weight-bold">Clinical Features</h3>
 <br>

@if($incident->toxicity->name =='Bee, Wasp, Hornet Stings')
<div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" readonly value="14" @if($symptoms->contains(14)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Bronchospasm
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="53" @if($symptoms->contains(53)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="34" @if($symptoms->contains(34)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;   Diarrhoea
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="74" @if($symptoms->contains(74)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="81" @if($symptoms->contains(81)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="82" @if($symptoms->contains(82)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Malaise
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="98" @if($symptoms->contains(98)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="110" @if($symptoms->contains(110)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  BPruritus
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="114" @if($symptoms->contains(114)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="121" @if($symptoms->contains(121)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="259" @if($symptoms->contains(259)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Seizures
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="166" @if($symptoms->contains(166)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Serum sickness
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="131" @if($symptoms->contains(131)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="137" @if($symptoms->contains(137)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tightness of chest
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="140" @if($symptoms->contains(140)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Urticaria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(1)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="170" @if($symptoms->contains(170)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Coagulopathy
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="163" @if($symptoms->contains(163)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="171" @if($symptoms->contains(171)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cramping truncal pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="169" @if($symptoms->contains(169)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemoglobinuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="173" @if($symptoms->contains(173)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="175" @if($symptoms->contains(175)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Hyperaesthesia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="157" @if($symptoms->contains(157)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypertension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="54" @if($symptoms->contains(54)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="167" @if($symptoms->contains(167)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Local necrosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="172" @if($symptoms->contains(172)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Muscle spasm
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="101" @if($symptoms->contains(101)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="176" @if($symptoms->contains(176)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ptosis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="114" @if($symptoms->contains(114)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="118" @if($symptoms->contains(118)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Restlessness
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="124" @if($symptoms->contains(124)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Salivation
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="168" @if($symptoms->contains(168)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="130" @if($symptoms->contains(130)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Sweating
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="131" @if($symptoms->contains(131)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Swelling
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="174" @if($symptoms->contains(174)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="140" @if($symptoms->contains(140)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Urticaria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Vomiting
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="146" @if($symptoms->contains(146)) checked @endif>
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
                     <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(1)) checked @endif>

                     <label class="form-check-label" for="gridCheck">
                         &nbsp; Abdominal pain
                     </label>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif >
                     <label class="form-check-label" for="gridCheck">
                         &nbsp;  Vomiting
                     </label>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" readonly value="146" @if($symptoms->contains(146)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="17" @if($symptoms->contains(17)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning sensation of mouth 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="376" @if($symptoms->contains(376)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="380" @if($symptoms->contains(380)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cranial nerve palsy
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="367" @if($symptoms->contains(367)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Dark coloured urine
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="359" @if($symptoms->contains(359)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="44" @if($symptoms->contains(44)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Dysphagia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="371" @if($symptoms->contains(371)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dysuria 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="370" @if($symptoms->contains(370)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="59" @if($symptoms->contains(59)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Haematemesis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="337" @if($symptoms->contains(337)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Haemorrhage 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="383" @if($symptoms->contains(383)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="372" @if($symptoms->contains(372)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Mucosal erosion 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="378" @if($symptoms->contains(378)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="382" @if($symptoms->contains(382)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Periorbital dermatitis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="375" @if($symptoms->contains(375)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Priapism 
            </label>
            </div>
        </div>
   </div>371

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="381" @if($symptoms->contains(381)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="373" @if($symptoms->contains(373)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Renal dysfunction
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory failure 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="377" @if($symptoms->contains(377)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="125" @if($symptoms->contains(125)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="101" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Redness 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="131" @if($symptoms->contains(131)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="183" @if($symptoms->contains(183)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Anaphylactoid 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="186" @if($symptoms->contains(186)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="197" @if($symptoms->contains(197)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Ataxia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="18" @if($symptoms->contains(18)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="193" @if($symptoms->contains(193)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Chills
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="21" @if($symptoms->contains(21)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Coma 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="29" @if($symptoms->contains(29)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="192" @if($symptoms->contains(192)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Desquamation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="34" @if($symptoms->contains(34)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Diarrhoea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="189" @if($symptoms->contains(189)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="54" @if($symptoms->contains(54)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp; Fever
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="188" @if($symptoms->contains(188)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hemolysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="74" @if($symptoms->contains(74)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="187" @if($symptoms->contains(187)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Local oedema
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="172" @if($symptoms->contains(172)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Muscle spasm 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="185" @if($symptoms->contains(185)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Nausea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="182" @if($symptoms->contains(182)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Paraesthesia 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="113" @if($symptoms->contains(113)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="181" @if($symptoms->contains(181)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Rash
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="125" @if($symptoms->contains(125)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Seizure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="180" @if($symptoms->contains(180)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="178" @if($symptoms->contains(178)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Stinging 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="179" @if($symptoms->contains(179)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Throbbing 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="5" @if($symptoms->contains(5)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anaphylaxis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="355" @if($symptoms->contains(355)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="207" @if($symptoms->contains(207)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Lymphangitis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="131" @if($symptoms->contains(131)) checked @endif >
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
            <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Abdominal pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="2" @if($symptoms->contains(2)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Acute renal failure 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="208" @if($symptoms->contains(208)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="359" @if($symptoms->contains(359)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Disseminated intravascular coagulation
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="248" @if($symptoms->contains(248)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hematuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="354" @if($symptoms->contains(354)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="74" @if($symptoms->contains(74)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Hypotension
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="167" @if($symptoms->contains(167)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Local necrosis 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="98" @if($symptoms->contains(98)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="101" @if($symptoms->contains(101)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="336" @if($symptoms->contains(336)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Proteinuria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="121" @if($symptoms->contains(121)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="131" @if($symptoms->contains(131)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Swelling
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif >
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
            <input class="form-check-input"  type="checkbox" readonly value="278" @if($symptoms->contains(278)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Blood stained vomitus
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="355" @if($symptoms->contains(355)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Ecchymoses
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="330" @if($symptoms->contains(330)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="335" @if($symptoms->contains(335)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Intracranial haemorrhages
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="298" @if($symptoms->contains(298)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Melaena
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="324" @if($symptoms->contains(324)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="247" @if($symptoms->contains(247)) checked @endif> 
            
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
            <input class="form-check-input"  type="checkbox" readonly value="210" @if($symptoms->contains(210)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Areflexia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="213" @if($symptoms->contains(213)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Double vision
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="41" @if($symptoms->contains(41)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="44" @if($symptoms->contains(44)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Dysphagia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="214" @if($symptoms->contains(214)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  External ophthalmoplegia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="209" @if($symptoms->contains(209)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="176" @if($symptoms->contains(176)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Ptosis
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="211" @if($symptoms->contains(211)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory paralysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="212" @if($symptoms->contains(212)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="364" @if($symptoms->contains(364)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Burning sensation of lips
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="17" @if($symptoms->contains(17)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning sensation of mouth
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="349" @if($symptoms->contains(349)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="363" @if($symptoms->contains(363)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Cold extremities
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="21" @if($symptoms->contains(21)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Coma
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="163" @if($symptoms->contains(163)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="41" @if($symptoms->contains(41)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Drowsiness
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="47" @if($symptoms->contains(47)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Epigastric pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="365" @if($symptoms->contains(365)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Pustular papillae
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="117" @if($symptoms->contains(117)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Respiratory failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="300" @if($symptoms->contains(300)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="130" @if($symptoms->contains(130)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Sweating
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="132" @if($symptoms->contains(132)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Tachycardia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="366" @if($symptoms->contains(366)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="360" @if($symptoms->contains(360)) checked @endif>        
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Vertigo
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif >
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
<br><br>
<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" readonly name="clinicals_others"   >{{$incident->symptom_others}} </textarea>
</div>



<br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>




 <div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" readonly value="2" @if($management->contains(2)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Adrenaline
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="4" @if($management->contains(4)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="41" @if($management->contains(41)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="6" @if($management->contains(6)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anticonvulsants given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="8" @if($management->contains(8)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Antihistamine
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="11" @if($management->contains(11)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="16" @if($management->contains(16)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Gastric lavage
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="33" @if($management->contains(33)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hydrocortisone
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="36" @if($management->contains(36)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="17" @if($management->contains(17)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Icepacks Applaid
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="40" @if($management->contains(40)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Inotropic support
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="34" @if($management->contains(34)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="35" @if($management->contains(35)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Peritoneal
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="31" @if($management->contains(31)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Rest the area of bite
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="26" @if($management->contains(26)) checked @endif>
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
            <input class="form-check-input"  type="checkbox" readonly value="37" @if($management->contains(37)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tetanus prophylaxis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="38" @if($management->contains(38)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Topical steroids
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="30" @if($management->contains(30)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Wound cleaning
            </label>
            </div>
        </div>
   </div>
</div>

<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" readonly>{{$incident->management_others}}</textarea>
</div>




<br><br>
 <h4 class="font-weight-bold">&nbsp;AVS :</h4>
 <br>


 <div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" readonly value="7" @if($management->contains(7)) checked @endif>

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
  <textarea class="form-control" rows="5" id="comment" readonly>{{$toxicity->natural->fauna->avs_vials }}</textarea>
</div>
 <br><br>




 <h3 class="font-weight-bold">laboratory detail</h3>
 <br>

 <div class="form-group">

  <textarea class="form-control" rows="5" readonly>{{$laboratory->comments}}</textarea>
</div>


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>

 <div class="form-group">

  <textarea class="form-control"  rows="5" readonly>{{$incident->comments}}</textarea>
</div>


</form>
<br><br>
 <h3 class="font-weight-bold">Record Update Doctors Details</h3>
 <br>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($username as $data)
    <tr>
      <th scope="row"></th>
      <td>{{$data->name}}</td>
      <td>{{$data->created_at}}</td>
      <td>{{$data->updated_at}}</td>
      <td></td>
    </tr>
  @endforeach
  </tbody>
</table>

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

