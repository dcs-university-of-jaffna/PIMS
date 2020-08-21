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
        <input type="text" name ="fname" class="form-control"  value="{{$request->fname}}">

        </div>
   </div>


   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Second Name : </label>
      <input type="text" name ="lname" class="form-control"  value="{{$request->lname}}">

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
      <input type="text" name ="phn" class="form-control" value="{{$request->phn}}">

        </div>
   </div>
</div>


<div class="row">
    <div class="col">
        <div class="form-group">
        <label for="validationCustom01">Birth Date : </label>
        <input type="date" name ="bdate" class="form-control"  value="{{$request->bdate}}">

        </div>
   </div>



   <div class="col">
        <div class="form-group">
        <label for="validationCustom02">Contact Number : </label>
      <input type="text" name ="contact" class="form-control" value="{{$request->contact}}">

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

    <input type="hidden" name="pid" value="{{$request->pid}}" id="pid">

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
                <option  value="{{$request->Oplant_part}}">{{$request->plant_part}}</option>
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
            <option value = "Others">   Others   </option>
         </select>
       <input type="text" name="Oplant_part" id="plant_part" style='display:none;'/>
         </div>
   </div>


   <div class="col">
        <div class="form-group">
        <label for="validationCustom02"> Region :</label>
            <select name = "area" class="form-control" onchange='checkvalue1(this.value)'>
                @if($request->area=='Others')
                <option value="{{$request->Oarea}}">{{$request->area}}</option>
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
        <select name = "circumstance" class="form-control"  >
            @if($request->circumstance=='Others')
                <option value = "{{$request->circumstance}}">{{$request->circumstance}}</option>
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
                <option value = "{{$request->poisoning_mode}}">{{$request->poisoning_mode}}</option>
            @else
                <option value = "{{$request->poisoning_mode}}">{{$request->poisoning_mode}}</option>
            @endif

                <option value = "Contact">    Contact   </option>
                <option value = "Ingestion">  Ingestion  </option>
                <option value = "Inhalation"> Inhalation </option>
                <option value = "Others">     Others </option>
         </select>
           <input type="text" name="poisoning_mode" id="poisoning_mode" style='display:none;'/>
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

 <h3 class="font-weight-bold">Clinical Features</h3>
 <br>
@if($ray ==1)

  <div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input"  type="checkbox" name = "Clinical[]"   value="30" @if(in_array("30", $symptoms)) checked @endif>

            <label class="form-check-label" for="gridCheck">
               &nbsp;   Cycloplegia
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="42" @if(in_array("42", $symptoms)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Dry mouth
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="48" @if(in_array("48", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
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
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="54" @if(in_array("54", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Fever
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="86" @if(in_array("86", $symptoms))) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Mydriasis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="132" @if(in_array("132", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Tachycardia
            </label>
            </div>
        </div>
   </div>
   </div> 
    
    
  @elseif($ray ==2)
    <div class="row"> 
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" name = "Clinical[]"   type="checkbox"  value="30" @if(in_array("30", $symptoms)) checked @endif> 
            
            <label class="form-check-label" for="gridCheck">
               &nbsp;  Cycloplegia
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="25" @if(in_array("25", $symptoms)) checked @endif >
            <label class="form-check-label" for="gridCheck">
            &nbsp; Convulsion 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="32" @if(in_array("32", $symptoms)) checked @endif>
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
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="37" @if(in_array("37", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Dilation of pupils
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="39" @if(in_array("39", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Disturbance of consciousnessvalue  
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="43" @if(in_array("43", $symptoms)) checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="51" @if(in_array("51", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp; Eye inflammation 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="55" @if(in_array("55", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Fits 
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "Clinical[]"  value="56" @if(in_array("56", $symptoms)) checked @endif>
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
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="57" @if(in_array("57", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Flushing of face 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="63" @if(in_array("63", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Hallucinogenic_effects     
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="111" @if(in_array("111", $symptoms))checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "Clinical[]"   value="133" @if(in_array("133", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Talkativeness 
            </label>
            </div>
        </div>
   </div>
    
   <div class="col">
   <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  name = "Clinical[]"  value="136" @if(in_array("136", $symptoms)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;     Thirst
            </label>
            </div>
        </div>
   </div>
</div>
    @endif

 <div class="form-group">
  <label for="comment">Others:</label>
  <textarea class="form-control" rows="5" id="comment" name="clinicals_others"   >{{$request->clinicals_others}} </textarea>
</div>



 <br><br>
 <h3 class="font-weight-bold">Management</h3>
 <br>


 <div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="3" @if(in_array("3", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Alkalinization
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" id="gridCheck"  value="4" @if(in_array("4", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Analgesics given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="5" @if(in_array("5", $management))checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "management[]" value="6" @if(in_array("6", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Anticonvulsants given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="9" @if(in_array("9", $management))  checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Atropine given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="10"@if(in_array("10", $management))  checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "management[]" value="11" @if(in_array("11", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Calcium gluconate given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="13" @if(in_array("13", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Dialysis
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="14" @if(in_array("14", $management))  checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "management[]" value="20" @if(in_array("20", $management))  checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Methylprednisolone/Corticosteroids
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="21" @if(in_array("21", $management))  checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  NaCl given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="22" @if(in_array("22", $management))  checked @endif>
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
            <input class="form-check-input" type="checkbox" name = "management[]" value="24" @if(in_array("24", $management))  checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Prednisalone given
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="26"@if(in_array("26", $management))  checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;  Resuscitation
            </label>
            </div>
        </div>
   </div>

   <div class="col">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]" value="29" @if(in_array("29", $management))  checked @endif>
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
  <textarea class="form-control" rows="5" name = "managements_others" id="comment" >{{$request->managements_others}}</textarea>
</div>

<h3 class="font-weight-bold">Gastrointestinal decontamination : </h3>
 <br>

    <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="15" @if(in_array("15", $management)) checked @endif>
            <label class="form-check-label" for="gridCheck">
            &nbsp;   Gastric aspiration
            </label>
            </div>
        </div>
   </div>
   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="1" @if(in_array("1", $management)) checked @endif>
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
                <input  class="form-control" type="text" name = "activated_chracol_doses" value="{{$request->activated_chracol_doses}}">
            </div>
            <br>

   <div class="row">
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "management[]"  value="7" @if(in_array("7", $management)) checked @endif>
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
                <input  class="form-control" type="text" name = "antidote" value=" {{$request->antidote}}">
     </div>


<br><br>
  <h3 class="font-weight-bold">laboratory detail</h3>
<br>

 <div class="form-group">
    <textarea class="form-control" rows="5" name="Lab_Comments" >{{$request->Lab_Comments}}</textarea>
 </div>


<br><br>
 <h3 class="font-weight-bold">Comment</h3>
 <br>

 <div class="form-group">

  <textarea class="form-control" name = "comments" rows="5" >{{$request->comments}}</textarea>
</div>

 <button type="submit" name ="save" value="save"  onclick="return confirm(&quot;Save the data?&quot;)" class="btn btn-primary">Save</button>
 <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name ="submit" value="submit" class="btn btn-success" > Save & Submit</button>


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





    </form>


    </div>

<script src="js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

