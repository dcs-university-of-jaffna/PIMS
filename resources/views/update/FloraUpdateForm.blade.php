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
            background-color: #b4b4b4;
        }
        a:link, a:visited {
        background-color: #787878;
        color: white;
        padding: 4px 14px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        }

        a:hover, a:active {
        background-color: #3c3c3c;
        }
    </style>        
</head>
<body>

    <div class="container-fluid">
        <div class="jumbotron text-center p-1">
        
        
            <h1>{{$toxicity->name}}Update</h1>
        </div>
        <div class="round3">
            <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
            <div>
            <table style="width:100%">
            <!--a name ="Poison Detail"--></a>            

                <tr>
                    <th>
                        <h3>
                            <a name ="PoisonDetail"></a>
                            <p><a href="#PoisonDetail" class="w3-button w3-black">Poison Detail</a></p>
                        </h3>
                    </th>
                    <th>
                        <h3>
                            <p><a href="#ManagemntDetail">Managemnt Detail</a></p> 
                            
                        </h3>
                    </th>
                    <th>
                        <h3>

                        <a href="#Gastrointestinaldecontamination">Gastrointestinal decontamination</a></p>  
                       
                        </h3>
                    </th>
                </tr>

                <!--div class="btn-group">
                <input type="button" value="Poison Detail" onclick="Poison Detail" />                
                    <button>Apple</button>
                    <button>Samsung</button>
                    <button>Sony</button>
                </div-->                

            </table>
                <!--h3>Poison Detail</h3-->
                <div class="row">
                    <div class="col-sm-4 pl-4">
                        <label1> 01) Date :
                            <input type="date" name="date" id="date" value="{{old('date') ?? $incident->date}}">

                        </label1>
                    </div>
                    <script>
                        var a = "{{$incident->id}}";
                        var b = "";

                    </script>
                    <div class="col-sm-4 pl-4">
                        <label2 class="pl-5"> 02) Time :
                            <input type="time" name="time" value="{{old('date') ?? $incident->time}}">
                        </label2>
                    </div>
                    <div class="col-sm-3 pl-4">

                        <label3>03) Region :

                            <span class="select">
                                    <select name="area" id="area" type="time">
                                        <option value=" "> ..Please choose one option.. </option>
                                        <option id="Chankanai" value="Chankanai"> Chankanai </option>
                                        <option id="Chavakachcheri" value="Chavakachcheri"> Chavakachcheri  </option>
                                        <option id="Delft" value="Delft"> Delft  </option>
                                        <option id="Jaffna" value="Jaffna"> Jaffna  </option>
                                        <option id="Karainagar" value="Karainagar"> Karainagar  </option>
                                        <option id="Karaveddy" value="Karaveddy"> Karaveddy  </option>
                                        <option id="Kayts" value="Kayts"> Kayts  </option>
                                        <option id="Kopay" value="Kopay"> Kopay  </option>
                                        <option id="Maruthankerney" value="Maruthankerney"> Maruthankerney  </option>
                                        <option id="Nallur" value="Nallur"> Nallur  </option>
                                        <option id="Point Pedro" value="Point Pedro"> Point Pedro  </option>
                                        <option id="Sandilipay" value="Sandilipay"> Sandilipay  </option>
                                        <option id="Tellippalai" value="Tellippalai"> Tellippalail  </option>
                                        <option id="Uduvil" value="Uduvil"> Uduvil  </option>
                                        <option id="Velanai" value="Velanai"> Velanai  </option>
                                        <option id="Outside Jaffna District" value="Outside Jaffna District"> Outside Jaffna District </option>
                                    </select>

                                    <script>
                                        var a = "{{$incident->area}}";

                                        function setSelectedIndex(s, v) {

                                            for (var i = 0; i < s.options.length; i++) {

                                                if (s.options[i].id == v) {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }

                                        // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('area'), a);

                                    </script>
                            </span>
                        </label3>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-sm-4 pl-4">
                    <label4> 04) Part of plant :
                        <span class = "select">
                            <select name = "plant_part" id ="plant_part">
                                <option value = " "> ..Please choose one option.. </option>
                                <option value = "branches"> Branches </option>
                                <option value = "bulbs"> Bulbs  </option>
                                <option value = "flowers"> Flowers	  </option>
                                <option value = "leaves"> Leaves </option>
                                <option value = "pods"> Pods  </option>
                                <option value = "roots"> Roots </option>
                                <option value = "seeds"> Seeds  </option>
                                <option value = "stems"> Stems </option>
                                <option value = "twigs"> Twigs  </option>
                            </select>
                            <script>
                                        var a = "{{$flora->plant_part}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('plant_part'),a);

                            </script>
                        </span>
                    </label4>
                    </div>
                    <div class="col-sm-4 pl-4">
                        <label6>05) Circumstance :
                        <span class = "select">
                                <select name = "circumstance" id="circumstance">
                                    <option value = " "> ..Please choose one option.. </option>
                                    <option value = "Accidental">  Accidental   </option>
                                    <option value = "Homicidal"> Homicidal </option>
                                    <option value = "Occupational"> Occupational </option>
                                    <option value = "Sucidal"> Suicidal  </option>
                                </select>
                                <script>
                                        var a = "{{$flora->circumstance}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('circumstance'),a);
                                </script>
                            </span>
                    </label6>
                        <br><br>
                    </div>
                    <div class="col-sm-4 pl-4">
                    <label7>06) Mode of poisoning :
                    <span class = "select">
                            <select name = "poisoning_mode" id = "poisoning_mode">
                                <option value = " "> ..Please choose one option.. </option>
                                <option value = "Contact">  Contact   </option>
                                <option value = "Ingestion"> Ingestion  </option>
                                <option value = "Inhalation"> Inhalation </option>
                                <option value = "Others"> Others </option>
                            </select>
                            <script>
                                        var a = "{{$flora->poisoning_mode}}";

                                        function setSelectedIndex(s,v) {

                                            for ( var i = 0; i < s.options.length; i++ )
                                            {

                                                if ( s.options[i].value == v )
                                                {

                                                    s.options[i].selected = true;
                                                    break;

                                                }
                                            }
                                            return;
                                            //s.selected = true;

                                        }
                                    // $url = "{{$incident->area}}";
                                        setSelectedIndex(document.getElementById('poisoning_mode'),a);
                                </script>

                        </span>
                    </label7>
                    <br><br>
                    </div>
                </div>

                <div class="col-sm-4 pl-4">
                        <label5> 07) Amount of poisoning :
                        <input type="number" min="0" name="amount" value="{{old('date') ?? $flora->amount}}"/>
                        </label5>
                        <br><br>

                </div>
            </div>

            <div data-panel="four">

                <table style="width:100%">
                    <tr>
                        <th>
                            <h3>
                                <p><a href="#PoisonDetail">Poison Detail</a></p>

                            </h3>
                        </th>
                        <th>
                            <h3>                    
                                <a name ="ManagemntDetail"></a>
                                <p><a href="#ManagemntDetail">Managemnt Detail</a></p>  
                            </h3>
                        </th>
                        <th>
                            <h3>
                                <a href="#Gastrointestinaldecontamination">Gastrointestinal decontamination</a></p>  
                            </h3>
                        </th>
                    </tr>
                </table>

                    <h4> Managemnt Detail</h4>
                    <div>
                        <input type="checkbox"
                        id = "test1"
                        name = "management[]"
                        class="check1"
                        value="03"
                        @if ( $managements ->contains(3))
                            checked
                        @endif
                        >
                        <label for="test1">Alkalinization</label>
                    </div>

                    <div>
                        <input type="checkbox"
                        id = "test2"
                        name = "management[]"
                        class="check1"
                        value="04"
                        @if ( $managements ->contains(4))
                            checked
                        @endif
                        >
                        <label for="test2">Analgesics given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test3"
                        name = "management[]"
                        class="check1"
                        value="05"
                        @if ( $managements ->contains(5))
                            checked
                        @endif
                        >
                        <label for="test3">Antibiotics given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test4"
                        name = "management[]"
                        class="check1"
                        value="06"
                        @if ( $managements ->contains(6))
                            checked
                        @endif
                        >
                        <label for="test4">Anticonvulsants given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test5"
                        name = "management[]"
                        class="check1"
                        value="9"

                        @if ( $managements ->contains(9))
                            checked
                        @endif
                        >
                        <label for="test5">Atropine given</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test6"
                        name = "management[]"
                        class="check1"
                        value="10"
                        @if ( $managements ->contains(10))
                            checked
                        @endif
                        >
                        <label for="test6">Blood transfusion/Plasma expanders </label>
                    </div>

                    <div>
                        <input type="checkbox"
                        id = "test7"
                        name = "management[]"
                        class="check1"
                        value="11"
                        @if ( $managements ->contains(11))
                            checked  = true;
                        @endif
                        >
                        <label for="test7">Calcium gluconate given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test8"
                        name = "management[]"
                        class="check1"
                        value="13"
                        @if ( $managements ->contains(13))
                            checked
                        @endif
                        >
                        <label for="test8">Dialysis </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test9"
                        name = "management[]"
                        value="14"
                        @if ( $managements ->contains(14))
                            checked
                        @endif
                        >
                        <label for="test9">Dopamine given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test10"
                        name = "management[]"
                        value="20"
                        @if ( $managements ->contains(20))
                            checked
                        @endif
                        >
                        <label for="test10">Methylprednisolone/Corticosteroids </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test11"
                        name = "management[]"
                        value="21"
                        @if ( $managements ->contains(21))
                            checked
                        @endif
                        >
                        <label for="test11">NaCl given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test12"
                        name = "management[]"
                        value="22"
                        @if ( $managements ->contains(22))
                            checked
                        @endif
                        >
                        <label for="test12">NaHCO3 given </label>
                        </div>
                    <div>
                        <input type="checkbox"
                        id = "test13"
                        name = "management[]"
                        value="24"
                        @if ( $managements ->contains(24))
                            checked
                        @endif
                        >
                        <label for="test13">Prednisalone given </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test14"
                        name = "management[]"
                        value="26"
                        @if ( $managements ->contains(26))
                            checked
                        @endif
                        >
                        <label for="test14">Resuscitation </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test15"
                        name = "management[]"
                        value="29"
                        @if ( $managements ->contains(29))
                            checked
                        @endif
                        >
                        <label for="test15">Supportive therapy </label>
                    </div>

                    If others : <br>
                            <textarea id="testone" rows = "4" cols = "120" name = "managements_others" value="{{old('date') ?? $incident->management_others}}" placeholder="Enter other management detail here">{{$incident->management_others}}</textarea>
                        <br><br>

                    <div>
                    <table style="width:100%">
                        <tr>
                            <th>
                                <h3>
                                    <p><a href="#PoisonDetail">Poison Detail</a></p>
                                </h3>
                            </th>
                            <th>
                                <h3>
                                    <p><a href="#ManagemntDetail">Managemnt Detail</a></p>  
                                </h3>
                            </th>
                            <th>
                                <h3>
                                <a name ="Gastrointestinaldecontamination"></a>
                                <p><a href="#Gastrointestinaldecontamination">Gastrointestinal decontamination</a></p>  
                                </h3>
                            </th>
                        </tr>
                    </table>

                    <b> Gastrointestinal decontamination : </b></label><br><br>
                    <div>
                        <input type="checkbox"
                        id = "test16"
                        name = "management[]"
                        value="15"
                        @if ( $managements ->contains(15))
                            checked
                        @endif
                        >
                        <label for="test16">Gastric_aspiration</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "test17"
                        name = "management[]"
                        value="1"
                        @if ( $managements ->contains(1))
                            checked
                        @endif
                        >
                        <label for="test17">Activated chracol</label>
                    </div>

                        If yes, number of doses :
                        <input type="text" name = "activated_chracol_doses" value="{{old('activated_chracol_doses') ?? $flora->activated_chracol_doses}}" >
                        <br><br>

                        Antidote :
                        <br>
                        <div>
                        <input type="checkbox"
                        id = "test18"
                        name = "management[]"
                        value="7"
                        @if ( $managements ->contains(7))
                            checked
                        @endif
                        >
                        <label for="test18">Antidote given</label>
                    </div>                            
                        If yes, type of antidote :
                        <input type="text" name = "antidote" value="{{old('antidote') ?? $flora->antidote}}" >
                    </div>
            </div>	

        </div>
           <div data-panel="three">
<br>

          <h4>Clinical Feature</h4>
                @if($toxicity->name=='Aththana')
			
                    <div>
                        <input type="checkbox"
                        id = "ch1"
                        name = "AththanaClinical[]"
                        value="30"
                        @if ( $symptoms ->contains(30))
                            checked
                        @endif
                        >
                        <label for="ch1">Cycloplegia</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "ch2"
                        name = "AththanaClinical[]"
                        value="42"
                        @if ( $symptoms ->contains(42))
                            checked
                        @endif
                        >
                        <label for="ch2">Dry mouth</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "ch3"
                        name = "AththanaClinical[]"
                        value="48"
                        @if ( $symptoms ->contains(48))
                            checked
                        @endif
                        >
                        <label for="ch3">Erythema</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "ch4"
                        name = "AththanaClinical[]"
                        value="54"
                        @if ( $symptoms ->contains(54))
                            checked
                        @endif
                        >
                        <label for="ch4"> Fever</label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "ch5"
                        name = "AththanaClinical[]"
                        value="84"
                        @if ( $symptoms ->contains(84))
                            checked
                        @endif
                        >
                        <label for="ch5"> Mydriasis </label>
                    </div>
                    <div>
                        <input type="checkbox"
                        id = "ch6"
                        name = "AththanaClinical[]"
                        value="132"
                        @if ($symptoms ->contains(132))
                            checked
                        @endif
                        >
                        <label for="ch6"> Tachycardia </label>
                    </div>  
                @endif                          
         </div>                               
    </div>	    


                    <div class="row p-4">
                            <button class="btn btn-success">
                                Save
                            </button>
                    </div>
            </form>

        <blockquote class="blockquote">
            <footer class="blockquote-footer">CB Tennakoon</footer>
        </blockquote>
        </div>
    </div>
</body>
</html>

