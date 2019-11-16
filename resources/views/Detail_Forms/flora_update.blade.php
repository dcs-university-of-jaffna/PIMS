<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PIMS </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
     <br><br><br>
     <h1  class="font-weight-bold" align="center">Aththana (Datura stramonium) </h1>

 
 <div class="container">
    <br><br>

 <form  action="/update_phn_search_flora" method ="post">
  @csrf   
 <div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01"> First Name : </label>
        <input type="text" name ="Fname" class="form-control"  value="{{$request->Fname}}">
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Second Name : </label>
      <input type="text" name ="Sname" class="form-control"  value="{{$request->Sname}}">
   
        </div>
   </div>
</div>
<br>

<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01"> NIC Number : </label>
        <input type="text" name ="nic" class="form-control"  value="{{$request->nic}}">
      
        </div>
   </div>
 

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> PHN Number : </label>
      <input type="text" name ="PHN" class="form-control" value="{{$request->PHN}}">
   
        </div>
   </div>
</div><br>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Birth Date : </label>
        <input type="text" name ="Bdate" class="form-control"  value="{{$request->Bdate}}">
      
        </div>
   </div>

    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact Number : </label>
      <input type="text" name ="Cno" class="form-control" value="{{$request->Cno}}">
   
        </div>
   </div>
</div><br>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Address : </label>
        <input type="text" name ="address" class="form-control"  value="{{$request->address}}">
      
        </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Gender : </label>
      <input type="text" name ="gender" class="form-control" value="{{$request->gender}}">
   
        </div>
   </div>
</div>

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

