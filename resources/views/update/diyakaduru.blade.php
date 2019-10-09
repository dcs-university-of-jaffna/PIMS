<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIMS</title>

    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<a href="{{ url('/home') }}" title="Go back to main menu">
    <button class="btn"><i class="fa fa-home"></i>Back</button>
</a>

<!-- partial:index.partial.html -->
<div class="form">
    <h2 style="text-align: center">Patient Detail(Diya kaduru Poison)</h2>

    <input id="one" type="radio" name="stage" checked="checked"/>
    <input id="two" type="radio" name="stage"/>
    <input id="three" type="radio" name="stage"/>
    <input id="four" type="radio" name="stage"/>
    <input id="five" type="radio" name="stage"/>
    <input id="six" type="radio" name="stage"/>

    <div class="stages">
        <label for="one" title="Personal Detail">1</label>
        <label for="two" title="Poison Detail">2</label>
        <label for="three" title="Clinical Features">3</label>
        <label for="four" title="Management Detail">4</label>
        <label for="five" title="Laboratory Detail">5</label>
        <label for="six" title="Save/Submit">6</label>
    </div>

    <span class="progress"><span></span></span>

    <div class="panels">


        <div data-panel="one">
            <h4>Personal Detail</h4>
            <label>PHN Number : {{ $incident->patient->phn }}</label>

        </div>

        <form action="/submitDiyakaduru" method="post">
            @csrf
            <div data-panel="two">
                <h4>Poison Detail</h4>
                <label> 01) Date of ingestion :
                    <span class="input">
                        <input type="date"
                               name="date"
                               value="{{ $incident->date }}">
                    </span>
                </label>
                <br><br>

                <label> 02) Time of ingestion :
                    <span class="input">
                        <input type="time"
                               name="time" value="{{ $incident->time }}">
                    </span>
                </label>
                <br><br>


                <label>03)Region of ingestion :
                    <input type="text"
                           name="area"
                           value="{{ $incident->area }}"/>
                </label>
                <br><br>


                <label> 04) Part of plant :
                    <input type="text"
                           name="plant_part" value="{{ $toxicity->plant_part }}"/>
                </label>
                <br><br>

                <label> 05) Amount :
                    <input type="number"
                           min="0"
                           name="amount" value="{{ $toxicity->amount }}"/>
                </label>

                <br><br>

                <label>06) Circumstance :
                    <span class="select">
                        <select name="circumstance">
                            <option value=" "> {{ $toxicity->circumstance }}  </option>
                            <option value="Accidental">  Accidental   </option>
                            <option value="Suicidal"> Suicidal  </option>
                            <option value="Homicidal"> Homicidal </option>
                            <option value="Occupational"> Occupational </option>
                        </select>
                    </span>

                </label>
                <br><br>
                <br>

                <label>07) Mode of poisoning :
                    <span class="select">
                        <select name="poisoning_mode">
                            <option value=" "> {{ $toxicity->poisoning_mode }} </option>
                            <option value="Contact">  Contact   </option>
                            <option value="Ingestion"> Ingestion  </option>
                            <option value="Inhalation"> Inhalation </option>
                            <option value="Others"> Others </option>
                        </select>
                    </span>

                </label>

            </div>

            <!----------------------------------------- Clinical Features --------------------------------------------->
            <div data-panel="three">
                <h4>Clinical Features</h4>
                <table>
                    <tr>
                        <td style="text-align: center;  position:relative ; left:5%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="1"
                                   @if ( $symptoms->contains(1))
                                   checked
                                @endif
                            >
                            <label for="Abdominal_pain"> Abdominal_pain </label>
                        </td>

                        <td style="text-align: center;  position:relative ; left:5%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="34"
                                   @if ( $symptoms->contains(34))
                                   checked
                                @endif
                            >
                            <label for="Diarrhoea"> Diarrhoea </label>
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="93"
                                   @if ( $symptoms->contains(93))
                                   checked
                                @endif
                            >Numbness and burning of mouth
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="46"
                                   @if ( $symptoms->contains(46))
                                   checked
                                @endif
                            > Electrolytes imbalance
                        </td>

                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="89"
                                   @if ( $symptoms->contains(89))
                                   checked
                                @endif
                            > Nausea
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="144"
                                   @if ( $symptoms->contains(144))
                                   checked
                                @endif
                            > Vomiting
                        </td>
                    </tr>
                </table>
                <br>

                <h5>CVS :</h5>
                <table>
                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="128"
                                   @if ( $symptoms->contains(128))
                                   checked
                                @endif
                            >Sinus bradycardia
                        </td>


                        <td style="text-align: center;  position: relative ; left:20%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="129"
                                   @if ( $symptoms->contains(129))
                                   checked
                                @endif
                            >Slow pulse
                        </td>

                        <td style="text-align: center;  position: relative ; left:40%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="74"
                                   @if ( $symptoms->contains(74))
                                   checked
                                @endif
                            > Hypotension
                        </td>
                    </tr>
                </table>

                <br>

                <h5>Cardiac Dysrrhythmias :</h5>
                <table>
                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="80"
                                   @if ( $symptoms->contains(80))
                                   checked
                                @endif
                            >Junctional rhythms
                        </td>


                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="352"
                                   @if ( $symptoms->contains(352))
                                   checked
                                @endif
                            > 1st Degree HB
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="DiyakaduruClinical[]"
                                   value="9"
                                   @if ( $symptoms->contains(9))
                                   checked
                                @endif
                            > Atrial and ventricular
                            ectopics
                        </td>
                    </tr>

                    <td style="text-align:center">
                        <input type="checkbox"
                               name="DiyakaduruClinical[]"
                               value="127"
                               @if ( $symptoms->contains(127))
                               checked
                            @endif
                        >Sinoatrial_block
                    </td>


                    <td style="text-align: center;  position: relative ; left:5%">
                        <input type="checkbox"
                               name="DiyakaduruClinical[]"
                               value="143"
                               @if ( $symptoms->contains(143))
                               checked
                            @endif
                        >Ventricular fibrillation
                    </td>

                    <td style="text-align: center;  position: relative ; left:10%">
                        <input type="checkbox"
                               name="DiyakaduruClinical[]"
                               value="353"
                               @if ( $symptoms->contains(353))
                               checked
                            @endif
                        > 2nd Degree HB
                    </td>
                </table>
                <br><br>
                <label> If others <br>
                    <input type="text"
                           name="clinicals_others"
                           value="{{ $incident->symptom_others }}">
                </label>

            </div>

            <!----------------------------------------- Management Details -------------------------------------------->
            <div data-panel="four">
                <h4> Managemnt Detail</h4>
                <table>
                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="management[]"
                                   value="26"
                                   @if ( $managements->contains(26))
                                   checked
                                @endif
                            > Resuscitation
                        </td>

                        <td style="text-align: center;  position:relative ; left:5%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="29"
                                   @if ( $managements->contains(29))
                                   checked
                                @endif
                            > Supportive therapy
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="6"
                                   @if ( $managements->contains(6))
                                   checked
                                @endif
                            > Anticonvulsants given
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="management[]"
                                   value="9"
                                   @if ( $managements->contains(9) )
                                   checked
                                @endif
                            > Atropine given
                        </td>

                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="13"
                                   @if ( $managements->contains(13) )
                                   checked
                                @endif
                            > Dialysis
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="3"
                                   @if ( $managements->contains(3) )
                                   checked
                                @endif
                            > Alkalinization
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="management[]"
                                   value="10"
                                   @if ( $managements->contains(10) )
                                   checked
                                @endif
                            > Blood transfusion/Plasma expanders
                        </td>

                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="22"
                                   @if ( $managements->contains(22) )
                                   checked
                                @endif
                            > NaHCO3 given
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="14"
                                   @if ( $managements->contains(14) )
                                   checked
                                @endif
                            > Dopamine given
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="management[]"
                                   value="4"
                                   @if ( $managements->contains(4) )
                                   checked
                                @endif
                            > Analgesics given
                        </td>

                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="11"
                                   @if ( $managements->contains(11) )
                                   checked
                                @endif
                            > Calcium gluconate given
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="5"
                                   @if ( $managements->contains(5) )
                                   checked
                                @endif
                            > Antibiotics given
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center">
                            <input type="checkbox"
                                   name="management[]"
                                   value="24"
                                   @if ( $managements->contains(24) )
                                   checked
                                @endif
                            > Prednisalone given
                        </td>

                        <td style="text-align: center;  position: relative ; left:5%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="21"
                                   @if ( $managements->contains(21) )
                                   checked
                                @endif
                            > NaCl given
                        </td>

                        <td style="text-align: center;  position: relative ; left:10%">
                            <input type="checkbox"
                                   name="management[]"
                                   value="20"
                                   @if ( $managements->contains(20) )
                                   checked
                                @endif
                            > Methylprednisolone/Corticosteroids
                        </td>
                    </tr>

                </table>

                <br><br>
                <label> If others <br>
                    <input type="text"
                           name="managements others"
                           value="{{ $incident->management_others }}"
                           size="55">
                </label><br><br>

                <label> <b> Gastrointestinal decontamination : </b></label><br><br>
                <label> Gastric aspiration & lavage : </label>
                <span class="select">
                        <select name="Gastric_aspiration">
                            <option value=" ">
                                @if ( $managements->contains(15) )
                                    yes
                                @else
                                    no
                                @endif
                            </option>
                            <option value="15">  yes   </option>
                            <option value=""> no </option>
                        </select>
                    </span><br><br>

                <label> Activated chracol : </label>
                <span class="select">
                        <select name="charcoal">
                            <option value=" ">
                                @if ( $managements->contains(1) )
                                    yes
                                @else
                                    no
                                @endif
                            </option>
                            <option value="1">  yes   </option>
                            <option value=""> no </option>
                        </select>
                    </span><br><br>
                <label> If yes, no of does <br>
                    <input type="number"
                           min="0"
                           name="activated_chracol_doses"
                           value="{{ $toxicity->activated_chracol_doses }}"
                    >
                </label>
                <br><br>

                <label> <b> Antidote given :</b> </label>
                <span class="select">
                        <select name="antidote_given">
                            <option value=" ">
                                @if ( $managements->contains(7) )
                                    yes
                                @else
                                    no
                                @endif
                            </option>
                            <option value="7">  yes   </option>
                            <option value=""> no </option>
                        </select>
                    </span><br><br>
                <label> If yes, type of antidote <br>
                    <input type="text"
                           name="antidote"
                           value="{{ $toxicity->antidote }}"
                    >
                </label>


            </div>

            <div data-panel="five">
                <h4>Laboratory Detail</h4>
                <input type="text"
                       placeholder="laboratory detail"
                />
            </div>
            <div data-panel="six">
                <h4>Save/Submit</h4>
                <label> Comment: <br>
                    <input type="text"
                           name="comments"
                           placeholder="Enter Comments here"
                           value="{{ $incident->comments }}"
                    />
                </label>
                <button type="submit" name="save" value="save">save</button>

                <button type="submit" onclick="return confirm(&quot;Submit the data?&quot;)" name="submit"
                        value="submit"> save & submit
                </button>
            </div>
        </form>

    </div>

    <button onclick="doclick()" name="next" id="btn_hide">next</button>

</div>
<!-- partial -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>

