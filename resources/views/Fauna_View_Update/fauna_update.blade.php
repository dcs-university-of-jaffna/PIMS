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
 
 
 
 <form action="/update_phn_search_fauna" method ="post">
   @csrf 
 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Name : </label>
        <input type="text" class="form-control" name ="name" id="validationCustom01" value="{{$patient->name}}" readonly>
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">PHN : </label>
      <input type="text" class="form-control" name="phn" id="validationCustom02" value="{{$patient->phn}}" readonly>
   
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
        <input type="text" class="form-control" name ="date" value ="{{$incident->date}}" readonly>
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Time : </label>
      <input type="text" class="form-control" name="date" value="{{$incident->time}}" readonly>
   
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting : </label>
            <input type="text" class="form-control" name="Place_of_bite" value="{{$toxicity->natural->fauna->place_of_sting}}"  readonly>
            
         </div>
   </div>

   <div class="col">
        <div class="form-group">
            <label for="validationCustom04">Place of bite/sting  others, specify: </label>
            <input type="text" class="form-control" name="Place_of_bite_others" value=""  >
         </div>
   </div>
</div>


<div class="row"> 
  <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
        <input type="text" class="form-control" name="region" value="{{$incident->area}}" >
        </div>
   </div>
</div>



<div class="row"> 
<div class="col">
        <div class="form-group">
        <label for="validationCustom02">Number Of String :</label>
      <input type="text" class="form-control" name="number_of_string" value="{{$toxicity->natural->fauna->number_of_stings}}" >
   
        </div>
   </div>

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
      <input type="text" class="form-control" name="circumstance" value="{{$toxicity->natural->fauna->circumstance}}" >
   
        </div>
   </div>

</div>

<div class="row">
     <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Bite site/Sting site :</label>
         <input type="text" class="form-control" name="bite_string" value="{{$toxicity->natural->fauna->sting_site}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
         <label for="validationCustom02">Bite site/Sting site  others, specify  :</label>
         <input type="text" class="form-control" name="bite_string_others" value="" >
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
            <input class="form-check-input"  type="checkbox"  value="14" @if($symptoms->contains(14)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Bronchospasm
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="165" @if($symptoms->contains(165)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Burning pain
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="53" @if($symptoms->contains(53)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="34" @if($symptoms->contains(34)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;   Diarrhoea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="74" @if($symptoms->contains(74)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hypotension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="81" @if($symptoms->contains(81)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="82" @if($symptoms->contains(82)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Malaise
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="89" @if($symptoms->contains(89)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Nausea
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="98" @if($symptoms->contains(98)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="110" @if($symptoms->contains(110)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  BPruritus
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="114" @if($symptoms->contains(114)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Renal failure
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="121" @if($symptoms->contains(121)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="259" @if($symptoms->contains(259)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Seizures
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="166" @if($symptoms->contains(166)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Serum sickness
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="131" @if($symptoms->contains(131)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="137" @if($symptoms->contains(137)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tightness of chest
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="140" @if($symptoms->contains(140)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Urticaria
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="144" @if($symptoms->contains(144)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Vomiting
            </label>
            </div>
        </div>
   </div>
</div>

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
            <input class="form-check-input"  type="checkbox"  value="2" @if($management->contains(2)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Adrenaline
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="4" @if($management->contains(4)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="41" @if($management->contains(41)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="6" @if($management->contains(6)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Anticonvulsants given  
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="8" @if($management->contains(8)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Antihistamine
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="11" @if($management->contains(11)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="16" @if($management->contains(16)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Gastric lavage
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="33" @if($management->contains(33)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Hydrocortisone 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="36" @if($management->contains(36)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="17" @if($management->contains(17)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Icepacks Applaid
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="40" @if($management->contains(40)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Inotropic support 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="34" @if($management->contains(34)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="35" @if($management->contains(35)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Peritoneal
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="31" @if($management->contains(31)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Rest the area of bite
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="26" @if($management->contains(26)) checked @endif>
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
            <input class="form-check-input"  type="checkbox"  value="37" @if($management->contains(37)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Tetanus prophylaxis 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="38" @if($management->contains(38)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Topical steroids 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  value="30" @if($management->contains(30)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Wound cleaning
            </label>
            </div>
        </div>
   </div>
</div>

<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" >{{$incident->management_others}}</textarea>
</div> 




<br><br>
 <h4 class="font-weight-bold">&nbsp;AVS :</h4>
 <br>


 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox"  value="7" @if($management->contains(7)) checked @endif> 
            
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
  <textarea class="form-control" rows="5" id="comment" >{{$toxicity->natural->fauna->avs_vials }}</textarea>
</div> 
 <br><br>
 
    





<br><br>
 <h3 class="font-weight-bold">laboratory detail</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" name="laboratory" rows="5" ></textarea>
</div> 


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>
 
 <div class="form-group">
 
  <textarea class="form-control" name="comment" rows="5" >{{$incident->comments}}</textarea>
</div> 

<input type="hidden" name="recordid" value="{{$incident->id}}">
<br>
<button class="btn btn-primary" type="submit" name ="save" value="save" >Save</button> 
<button class="btn btn-success" type="submit"  name ="submit" value="save">Submit</button> 
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

