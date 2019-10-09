<!DOCTYPE html>
<html lang="en">
<head>
  <title>AththanaUpdateForm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
        background-color: #53c68c ;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="jumbotron text-center p-1">
            <h1>AththanaUpdate</h1>
        </div>
        <div class="round3">
            <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-sm-4 pl-4">
                        <label1 > 01) Date :
                            <input type = "date" name = "date" id="date" value="{{old('date') ?? $incident->date}}">
                        
                        </label1>
                    </div>
                    <script>
                        var a = "{{$incident->id}}";
                        var b = "";

                    </script>
                    <div class="col-sm-4 pl-4">
                    <label2 class="pl-5"> 02) Time  :
                            <input type = "time" name = "time" value="{{old('date') ?? $incident->time}}">
                    </label2>
                    </div>
                    <div class="col-sm-3 pl-4">

                        <label3>03) Region :
                    
                            <span class = "select" >
                                    <select name = "area" id="area" type = "time" >
                                        <option   value = " "> ..Please choose one option.. </option>
                                        <option id= "Chankanai" value = "Chankanai"> Chankanai </option>
                                        <option id= "Chavakachcheri" value = "Chavakachcheri"> Chavakachcheri  </option>
                                        <option id= "Delft" value = "Delft"> Delft  </option>
                                        <option id= "Jaffna"value = "Jaffna"> Jaffna  </option>
                                        <option id= "Karainagar" value = "Karainagar"> Karainagar  </option>
                                        <option id= "Karaveddy" value = "Karaveddy"> Karaveddy  </option>
                                        <option id= "Kayts" value = "Kayts"> Kayts  </option>
                                        <option id= "Kopay" value = "Kopay"> Kopay  </option>
                                        <option id= "Maruthankerney" value = "Maruthankerney"> Maruthankerney  </option>
                                        <option id= "Nallur" value = "Nallur"> Nallur  </option>
                                        <option id= "Point Pedro" value = "Point Pedro"> Point Pedro  </option>
                                        <option id= "Sandilipay" value = "Sandilipay"> Sandilipay  </option>
                                        <option id= "Tellippalai" value = "Tellippalai"> Tellippalail  </option>
                                        <option id= "Uduvil" value = "Uduvil"> Uduvil  </option>
                                        <option id= "Velanai" value = "Velanai"> Velanai  </option>
                                        <option id= "Outside Jaffna District" value = "Outside Jaffna District"> Outside Jaffna District </option>
                                    </select>
                            
                                    <script>
                                        var a = "{{$incident->area}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ ) 
                                            {

                                                if ( s.options[i].id == v ) 
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('area'),a);

                                    </script>
                            </span>
                        </label3>
                        </div>
                </div>
                <div data-panel="four">
                    <h4> Managemnt Detail</h4>
                    
                        <input type="checkbox" id = "test1" name = "management1" class="check1" value="03"  >  Alkalinization <br>          
                        <input type="checkbox" id = "test2" name = "management2" class="check1" value="04"  >  Analgesics given <br>
                        <input type="checkbox" id = "test3" name = "management[]" class="check1" value="05"  > Antibiotics given <br>            
                        <input type="checkbox" id = "test4" name = "management[]" class="check1" value="06"  > Anticonvulsants given  <br>             
                        <input type="checkbox" id = "test5" name = "management[]" class="check1" value="09"  >  Atropine given <br>           
                        <input type="checkbox" id = "test6" name = "management[]" class="check1" value="10"  > Blood transfusion/Plasma expanders <br>               
                        <input type="checkbox" id = "test7" name = "management[]" class="check1" value="11"   > Calcium gluconate given <br>            
                        <input type="checkbox" id = "test8" name = "management[]" class="check1" value="13"   > Dialysis <br>
                
                    <label11> 
                        <input type="checkbox" id = "test9" name = "management[]" value="14"  >  Dopamine given <br>
                        <input type="checkbox" id = "test10" name = "management[]" value="20"  >  Methylprednisolone/Corticosteroids <br>
                        <input type="checkbox" id = "test11" name = "management[]" value="21">  NaCl given <br>
                        <input type="checkbox" id = "test12" name = "management[]" value="22"  >  NaHCO3 given <br>                        
                        <input type="checkbox" id = "test13" name = "management[]" value="24"  > Prednisalone given <br>      
                        <input type="checkbox" id = "test14" name = "management[]" value="26"  > Resuscitation <br>
                        <input type="checkbox" id = "test15"name = "management[]" value="29"  > Supportive therapy <br>
                    </label11> 
                    If others : <br> 
                                    <textarea rows = "4" cols = "120" name = "managements others"  placeholder="Enter other management detail here"></textarea>
                                <br><br>
                                
                    <label9> <b> Gastrointestinal decontamination : </b></label><br><br>
                        <input type="checkbox" id = "test16" name = "management[]" value="15"  > Gastric_aspiration<br><br> 
                        <input type="checkbox" id = "test17" name = "management[]" value="1"  > Activated chracol<br>  
                    
                        If yes, number of doses :  
                            <input type="text" name = "activated_chracol_doses" >
                        <br><br><br>
                    
                        <label> <b> Antidote :</b> </label><br><br>
                            <input type="checkbox" id = "test18" name = "management[]" value="7"  > Antidote given<br>  
                        If yes, type of antidote :  
                            <input type="text" name = "antidote" >
                    </label9>


                            <script>
                            var a = ["test1","test2","test3","test4","test5","test6","test7","test8","test9","test10","test11","test12","test13","test14","test15","test16","test17","test18"];
                            for(var i = 0;a.length;i++)
                            {
                                    var p = a[i];
                                    var b = {{$managements}};  
                                        for(var j=0;j<b.length;j++)
                                        {
                                            var t = b[j];
                                            function check(v,k) 
                                            {
                                                    if(v.value==k)
                                                    {
                                                    document.getElementById(p).checked = true;
                                                    //break;
                                                    }

                                            }
                                            check(document.getElementById(p),t);
                                        }
                            }
                            </script>   

                    </div>
                    <div class="row p-4">
                            <button class="btn btn-success">
                                Save
                            </button>       
                    </div>                                        
            <form>
        </div>
        <blockquote class="blockquote">
            <footer class="blockquote-footer">CB Tennakoon</footer>
        </blockquote> 
    </div>
</html>

