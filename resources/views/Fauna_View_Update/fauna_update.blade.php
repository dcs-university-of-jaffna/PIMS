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
 


<br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>
 
    





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

