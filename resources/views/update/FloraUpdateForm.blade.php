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
            background-color: #53c68c;
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
            <div>
                <h3>Poison Detail</h3>
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
                        <label for="test1"> Alkalinization</label>
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
                            <textarea id="testone" rows = "4" cols = "120" name = "managements others" value="{{old('date') ?? $incident->management_others}}" placeholder="Enter other management detail here">{{$incident->management_others}}</textarea>
                        <br><br>


                        <label9> <b> Gastrointestinal decontamination : </b></label><br><br>
                         <input type="checkbox" name = "management[]" value="15"  > Gastric_aspiration<br><br>
                         <input type="checkbox" name = "management[]" value="1"  > Activated chracol<br>

                          If yes, number of doses :
                            <input type="text" name = "activated_chracol_doses" >
                         <br><br><br>

                         <label> <b> Antidote :</b> </label><br><br>
                            <input type="checkbox" name = "management[]" value="7"  > Antidote given<br>
                             If yes, type of antidote :
                            <input type="text" name = "antidote" >
                         </label9>
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


