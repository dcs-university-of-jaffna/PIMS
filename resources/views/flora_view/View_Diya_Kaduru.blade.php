<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divi Kaduru View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <br><br><br>
 
   <h1  class="font-weight-bold" align="center">Diya Kaduru (Cerebra manghas)</h1>
 <div class="container">
    <br><br>
 <form class="needs-validation" novalidate>

 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Name : </label>
        <input type="text" class="form-control" id="validationCustom01" value="{{$patient->name}}" readonly>
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">PHN : </label>
      <input type="text" class="form-control" id="validationCustom02" value="{{$patient->phn}}" readonly>
   
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
        <label for="validationCustom04">Part of plant : </label>
        <input type="text" class="form-control" value="{{$toxicity->natural->flora->plant_part}}"  readonly>
         </div>
   </div>
    

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
        <label for="validationCustom02">Amount :</label>
      <input type="text" class="form-control"  value="{{$toxicity->natural->flora->amount}}" readonly>
   
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
      <input type="text" class="form-control"  value="{{$toxicity->natural->flora->circumstance}}" readonly>
   
        </div>
   </div>

</div>

<div class="row">
     <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Mode of poisoning :</label>
      <input type="text" class="form-control"  value="{{$toxicity->natural->flora->poisoning_mode }}" readonly>
   
        </div>
    </div>
    </div>
 <br><br>

 <h3 class="font-weight-bold">Clinical Features</h3>
 <br>
 
 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" readonly value="1" @if($symptoms->contains(1)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Abdominal_pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="34" @if($symptoms->contains(34)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Diarrhoea 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="46" @if($symptoms->contains(46)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="89" @if($symptoms->contains(89)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="93" @if($symptoms->contains(93)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Numbness and burning of mouth   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="144" @if($symptoms->contains(144)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="352" @if($symptoms->contains(352)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; 1st Degree HB
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="353" @if($symptoms->contains(353)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  2nd Degree HB 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="9" @if($symptoms->contains(9)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="74" @if($symptoms->contains(74)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="80" @if($symptoms->contains(80)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Junctional rhythms     
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="111" @if($symptoms->contains(127)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="128" @if($symptoms->contains(128)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Sinus bradycardia 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="129" @if($symptoms->contains(129)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Slow pulse
            </label>
            </div>
        </div>
   </div>
 
   <div class="col">
        <div class="form-group">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="143" @if($symptoms->contains(143)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Ventricular fibrillation 
            </label>
            </div>
         </div> 
        </div>
</div>


<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" value =""   readonly >{{$incident->symptom_others}} </textarea>
</div> 


<br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>
 
    
 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="3" @if($management->contains(3)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Alkalinization
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" readonly value="4" @if($management->contains(4)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="5" @if($management->contains(5)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="6" @if($management->contains(6)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Anticonvulsants given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="9" @if($management->contains(9)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Atropine given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="10" @if($management->contains(10)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="11" @if($management->contains(11)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Calcium gluconate given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="13" @if($management->contains(13)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Dialysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="14" @if($management->contains(14)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="20" @if($management->contains(20)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Methylprednisolone/Corticosteroids
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="21" @if($management->contains(21)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  NaCl given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="22" @if($management->contains(22)) checked @endif>
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
            <input class="form-check-input" type="checkbox" readonly value="24" @if($management->contains(24)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Prednisalone given
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="26" @if($management->contains(26)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Resuscitation
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="29" @if($management->contains(29)) checked @endif>
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
  <textarea class="form-control" rows="5" id="comment" readonly>{{$incident->management_others}}</textarea>
</div> 

<h3 class="font-weight-bold">Gastrointestinal decontamination : </h3>
 <br>

    <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="15" @if($management->contains(15)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Gastric aspiration 
            </label>
            </div>
        </div>
   </div>
   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="1" @if($management->contains(1)) checked @endif>
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
                <input  class="form-control" readonly value="{{$toxicity->activated_chracol_doses}}"> 
            </div>
            <br>

   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="7" @if($management->contains(7)) checked @endif>
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
                <input  class="form-control" readonly value=" {{$toxicity->antidote}}">
     </div>












<br><br>
 <h3 class="font-weight-bold">laboratory detail</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" rows="5" readonly></textarea>
</div> 


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control"  rows="5" readonly>{{$incident->comments}}</textarea>
</div> 


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

