<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recode View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <br><br><br>
 
   <h1  class="font-weight-bold" align="center">Bee Sting</h1>
 <div class="container">
    <br><br>
 <form class="needs-validation" novalidate>
  @foreach($data as $value)
   
 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Name : </label>
        <input type="text" class="form-control" id="validationCustom01" value="" readonly>
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">PHN : </label>
      <input type="text" class="form-control" id="validationCustom02" value="{{$value->phn}}" readonly>
   
        </div>
   </div>
</div>
<br><br>

  
  <h3 class="font-weight-bold">Sting detail</h3>
  <br>
     
 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Time of Sting : </label>
        <input type="text" class="form-control" value ="{{$value->sting_time}}" readonly>
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Number of Sting</label>
      <input type="text" class="form-control"  value="{{$value->number_of_stings}}" readonly>
   
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Place of Sting : </label>
        <input type="text" class="form-control" value="{{$value->place_of_sting}}"  readonly>
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstances of Stings</label>
      <input type="text" class="form-control" value="{{$value->cirmustance}}" readonly>
   
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
            <input class="form-check-input"  type="checkbox" readonly value="{{$value->burning_pain}}"
            @if($value->burning_pain == 1) checked @endif >
            <label class="form-check-label" for="gridCheck">
               &nbsp; Burning pain
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->pruritus }}"
            @if($value->pruritus  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Pruritus   
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->vomiting}}"
            @if($value->vomiting == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Vomiting 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->bronchospasm}}"
            @if($value->bronchospasm == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Brochospasm 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->renal_failure}}"
            @if($value->renal_failure == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Renal failure  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->tightness_of_chest 	}}"
            @if($value->tightness_of_chest == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;    Tightness of chest 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->urticaria}}"
            @if($value->urticaria == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Urteacaria 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->rhabdomyolysis}}"
            @if($value->rhabdomyolysis == 1) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Rhabdomyolysis 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->swelling}}"
            @if($value->swelling == 1) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Swelling 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->nausea}}"
            @if($value->nausea == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Nausea 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->hypotension}}"
            @if($value->hypotension == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Hypotension
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->oliguria }}"
            @if($value->oliguria  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Oliguria 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->diarrhoea }}"
            @if($value->diarrhoea  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Diarrhoea
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->malaise}}"
            @if($value->malaise == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Malaise 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->facial_odema}}"
            @if($value->facial_odema  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Facial odema 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->seizure}}"
            @if($value->seizure == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Seizure 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->laryngeal_odema}}"
            @if($value->laryngeal_odema == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Laryngeal odema
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
<br>
<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" readonly>{{$value->clinicals_others}}</textarea>
</div> 


<br><br>
 <h3 class="font-weight-bold">Managemnt</h3>
 <br>
 
    
 <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->ice_packs }}"
            @if($value->ice_packs  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Apply ice
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" readonly value="{{$value->antihistamine }}"
            @if($value->antihistamine  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Antiistamine 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->renal_rep_theraphy}}"
            @if($value->renal_rep_theraphy == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Need Renal Replacement Theraphy 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->icu_care }}"
            @if($value->icu_care  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  ICU care 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->steroids }}"
            @if($value->steroids  == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Steroids  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->burning_pain}}"
            @if($value->burning_pain == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Need invasive ventiliation 
            </label>
            </div>
        </div>
   </div>
</div>

<div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->invasive_ventilation}}"
            @if($value->invasive_ventilation == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Adrenalin(IM) 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" readonly value="{{$value->stinger_scrapped}}"
            @if($value->stinger_scrapped == 1) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Stinger scrapped  
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


<br>
<div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" value=""rows="5" autofocus readonly>{{$value->managements_others}}</textarea>
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
 
  <textarea class="form-control"  rows="5" readonly>{{$value->comments}} </textarea>
</div> 

@endforeach
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