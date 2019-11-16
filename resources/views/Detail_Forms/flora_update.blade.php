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
    <br>

 
 <div class="container">
     
       <table class="table">
        <tr>
            <td>
       @if($ray==1)
        <h3><b>  Poison : Aththana (Datura stramonium)  </b></h3><br>
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
</td>

<td>
     <h3 style="text-align: center"><b> Category : Natural Toxins - Flora   </b></h3><br>
     <td></tr></table>
 <form  action="/update_flora" method ="post">
  @csrf   
   <h3 class="font-weight-bold">Personal Detail</h3>
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
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Birth Date : </label>
        <input type="date" name ="Bdate" class="form-control"  value="{{$request->Bdate}}">
      
        </div>
   </div>

    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact Number : </label>
      <input type="text" name ="Cno" class="form-control" value="{{$request->Cno}}">
   
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Address : </label>
        <input type="text" name ="address" class="form-control"  value="{{$request->address}}">
      
        </div>
   </div>
  
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Gender  : </label>
       <select name = "gender" class="form-control">
           <option  value="{{$request->gender}}">{{$request->gender}}</option>
            <option value = "Male">     Male    </option>
            <option value = "Female">   Female </option>
         </select>
        
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
        <input type="date" name = "date" class="form-control" value ="{{$request->date}}"  >
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Time : </label>
      <input type="time" name = "time" class="form-control"  value="{{$request->time}}" >
   
        </div>
   </div>
</div>


<div class="row"> 
    <div class="col">
        <div class="form-group">
        <label for="validationCustom04">Part of plant : </label>
       <select name = "plant_part" class="form-control" onchange='checkvalue2(this.value)'>
    @if($request->plant_part=='Others')
                <option  value="{{$request->Oplant_part}}">{{$request->Oplant_part}}</option>
    @else
                 <option  value="{{$request->plant_part}}">{{$request->plant_part}}</option>
    @endif 
           
            <option value = "Branches"> Branches </option>
            <option value = "Bulbs">    Bulbs    </option>
            <option value = "Flowers">  Flowers  </option>
            <option value = "Leaves">   Leaves   </option>
            <option value = "pods">     Pods     </option>
            <option value = "Roots">    Roots    </option>
            <option value = "Seeds">    Seeds    </option>
            <option value = "Stems">    Stems    </option>
            <option value = "Twigs">    Twigs    </option>
            <option value = "Others">     Others </option>
         </select>
       <input type="text" name="Oplant_part" id="plant_part" style='display:none;'/>  
         </div>
   </div>
    

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
            <select name = "area" class="form-control" onchange='checkvalue1(this.value)'>
                @if($request->area=='Others')
                <option value="{{$request->Oarea}}">{{$request->Oarea}}</option>
            @else
                 <option value="{{$request->area}}">{{$request->area}}</option>
            @endif 
               
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
                <option value = "Others">     Others </option>
         </select>
        <input type="text" name="Oarea" id="area" style='display:none;'/>
        </div>
   </div>
</div>

<div class="row"> 

   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Circumstance :</label>
        <select name = "circumstance" class="form-control" onchange='checkvalue3(this.value)' >
            @if($request->circumstance=='Others')
                <option value = "{{$request->Ocircumstance}}">{{$request->Ocircumstance}}</option>
            @else
               <option value="{{$request->circumstance}}">{{$request->circumstance}}</option>
            @endif 
            
                <option value = "Accidental">   Accidental   </option>
                <option value = "Homicidal">    Homicidal    </option>
                <option value = "Occupational"> Occupational </option>
                <option value = "Sucidal">      Suicidal     </option>
                <option value = "Others">     Others </option>
         </select>
         <input type="text" name="Ocircumstance" id="circumstance" style='display:none;'/>
        </div>
   </div>


     <div class="col">
        <div class="form-group" class="form-control">
        <label for="validationCustom02">Mode of poisoning :</label>
        <select name = "poisoning_mode" class="form-control" onchange='checkvalue(this.value)'>
            @if($request->poisoning_mode=='Others')
                <option value = "{{$request->Opoisoning_mode}}">{{$request->Opoisoning_mode}}</option>
            @else
                <option value = "{{$request->poisoning_mode}}">{{$request->poisoning_mode}}</option>
            @endif    
                
                <option value = "Contact">    Contact   </option>
                <option value = "Ingestion">  Ingestion  </option>
                <option value = "Inhalation"> Inhalation </option>
                <option value = "Others">     Others </option>
         </select>
           <input type="text" name="Opoisoning_mode" id="poisoning_mode" style='display:none;'/>
        </div>
    </div>
    </div>
  
    <div class="row">
  <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Amount :</label>
      <input type="text" name="amount" class="form-control"  value="{{$request->amount}}">
   
        </div>
   </div>
        </div>
  
 <br><br>

 <button type="submit" name ="save" value="save"  onclick="return confirm(&quot;Save the data?&quot;)">Save</button>  
 <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit"> Save & Submit</button> 

  
  <br><br><br>

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

<script src="js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

