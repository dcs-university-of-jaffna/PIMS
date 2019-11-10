@extends('layouts/app')

@section('content')
<!------------------------ Detail form heading  -------------------------------------------------------->
<h2> Patient Detail : Diya kaduru Poison </h2>

<!------------------------ Personal Details view ------------------------------------------------------->
<h4>Personal Detail</h4>
<label>PHN Number : {{ $incident->patient->phn }}</label>

<!------------------------ Detail submission form ------------------------------------------------------>
<div>
    <form action="/incidents/{{ $incident->id }}" method="post">
        @csrf
        @method('PATCH')
        <!------------------------ Poison Details -------------------------------------------------------------->
        <div>
            <h4>Poison Detail</h4>
            <div>
                <label for="inc_date"> 01) Date : </label>
                <input id="inc_date" type="date" name="date" value="{{ $incident->date }}">
            </div>
            <br>

            <div>
                <label for="inc_time"> 02) Time : </label>
                <input id="inc_time" type="time" name="time" value="{{ $incident->time }}">
            </div>
            <br>

            <div>
                <label for="inc_area"> 03) Region : </label>
                <input id="inc_area" type="text" name="area" value="{{ $incident->area }}"/>
            </div>
            <br>

            <div>
                <label for="pl_pt"> 04) Part of Plant : </label>
                <input id="pl_pt" type="text" name="plant_part" value="{{ $toxicity->plant_part }}"/>
            </div>
            <br>

            <div>
                <label for="amount"> 05) Amount : </label>
                <input id="amount" type="number" min="0" name="amount" value="{{ $toxicity->amount }}"/>
            </div>
            <br>

            <div>
                <label for="cir_sel"> 06) Circumstance : </label>
                <select id="cir_sel" name="circumstance">
                    <option value=""> ..Please choose one option..  </option>
                    <option id="Accidental" value="Accidental">  Accidental   </option>
                    <option id="Suicidal" value="Suicidal"> Suicidal  </option>
                    <option id="Homicidal" value="Homicidal"> Homicidal </option>
                    <option id="Occupational" value="Occupational"> Occupational </option>
                </select>

                <script>
                    let cir = "{{$toxicity->circumstance}}";
                    let att = document.createAttribute("selected");
                    document.getElementById(cir).setAttributeNode(att);
                </script>
            </div>
            <br>

            <div>
                <label for="mode_sel"> 07) Mode of Poisoning : </label>
                <select id="mode_sel" name="poisoning_mode">
                    <option value=""> ..Please choose one option.. </option>
                    <option id="Contact" value="Contact">  Contact   </option>
                    <option id="Ingestion" value="Ingestion"> Ingestion  </option>
                    <option id="Inhalation" value="Inhalation"> Inhalation </option>
                    <option id="Others" value="Others"> Others </option>
                </select>

                <script>
                    let mop = "{{$toxicity->poisoning_mode}}";
                    let atr = document.createAttribute("selected");
                    document.getElementById(mop).setAttributeNode(atr);
                </script>
            </div>
        </div>

        <!-------------------------- Clinical Features ------------------------------------------------------>
        <div>
            <h4>Clinical Features</h4>

            <div>
                <input  type="checkbox"
                        id="abdominal_pain"
                        name="symptoms[]"
                        value="1"
                        @if ( $symptoms->contains(1))
                            checked
                        @endif
                >
                <label for="abdominal_pain"> Abdominal pain </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="diarrhoea"
                        name="symptoms[]"
                        value="34"
                        @if ( $symptoms->contains(34))
                            checked
                        @endif
                >
                <label for="diarrhoea"> Diarrhoea </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="bur_mouth"
                        name="symptoms[]"
                        value="93"
                        @if ( $symptoms->contains(93))
                            checked
                        @endif
                >
                <label for="bur_mouth"> Numbness and burning of mouth </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="ele_imb"
                        name="symptoms[]"
                        value="46"
                        @if ( $symptoms->contains(46))
                            checked
                        @endif
                >
                <label for="ele_imb"> Electrolytes imbalance </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="nausea"
                        name="symptoms[]"
                        value="89"
                        @if ( $symptoms->contains(89))
                            checked
                        @endif
                >
                <label for="nausea"> Nausea </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="vomiting"
                        name="symptoms[]"
                        value="144"
                        @if ( $symptoms->contains(144))
                            checked
                        @endif
                >
                <label for="vomiting"> Vomiting </label>
            </div>

            <br>

            <div>
                <h5> CVS :</h5>
                <div>
                    <input  type="checkbox"
                            id="sin_brad"
                            name="symptoms[]"
                            value="128"
                            @if ( $symptoms->contains(128))
                                checked
                            @endif
                    >
                    <label for="sin_brad"> Sinus bradycardia </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="slo_pul"
                            name="symptoms[]"
                            value="129"
                            @if ( $symptoms->contains(129))
                                checked
                            @endif
                    >
                    <label for="slo_pul"> Slow pulse </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="hypo"
                            name="symptoms[]"
                            value="74"
                            @if ( $symptoms->contains(74))
                                checked
                            @endif
                    >
                    <label for="hypo"> Hypotension </label>
                </div>
            </div>

            <br>

            <div>
                <h5> Cardiac Dysrrhythmias :</h5>
                <div>
                    <input  type="checkbox"
                            id="jun_rhy"
                            name="symptoms[]"
                            value="80"
                            @if ( $symptoms->contains(80))
                                checked
                            @endif
                    >
                    <label for="jun_rhy"> Junctional rhythms </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="1hb"
                            name="symptoms[]"
                            value="352"
                            @if ( $symptoms->contains(352))
                                checked
                            @endif
                    >
                    <label for="1hb"> 1st Degree HB </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="ven_ect"
                            name="symptoms[]"
                            value="9"
                            @if ( $symptoms->contains(9))
                                checked
                            @endif
                    >
                    <label for="ven_ect"> Atrial and ventricular ectopics </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="sin_blo"
                            name="symptoms[]"
                            value="127"
                            @if ( $symptoms->contains(127))
                                checked
                            @endif
                    >
                    <label for="sin_blo"> Sinoatrial block </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="ven_fib"
                            name="symptoms[]"
                            value="143"
                            @if ( $symptoms->contains(143))
                                checked
                            @endif
                    >
                    <label for="ven_fib"> Ventricular fibrillation </label>
                </div>

                <div>
                    <input  type="checkbox"
                            id="2hb"
                            name="symptoms[]"
                            value="353"
                            @if ( $symptoms->contains(353))
                                checked
                            @endif
                    >
                    <label for="2hb"> 2nd Degree HB </label>
                </div>
            </div>

            <br>

            <div>
                <label for="cli_oth"> If others <br></label>
                <input  type="text"
                        id="cli_oth"
                        name="symptom_others"
                        value="{{ $incident->symptom_others }}"
                >
            </div>
        </div>

        <!----------------------------------------- Management Details -------------------------------------------->
        <div>
            <h4> Management Details </h4>

            <div>
                <input  type="checkbox"
                        id="re_sus"
                        name="managements[]"
                        value="26"
                        @if ( $managements->contains(26))
                            checked
                        @endif
                >
                <label for="re_sus"> Resuscitation </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="sup_the"
                        name="managements[]"
                        value="29"
                        @if ( $managements->contains(29))
                            checked
                        @endif
                >
                <label for="sup_the"> Supportive therapy </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="ant_con"
                        name="managements[]"
                        value="6"
                        @if ( $managements->contains(6))
                            checked
                        @endif
                >
                <label for="ant_con"> Anticonvulsants given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="atr_p"
                        name="managements[]"
                        value="9"
                        @if ( $managements->contains(9) )
                            checked
                        @endif
                >
                <label for="atr_p"> Atropine given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="dial"
                        name="managements[]"
                        value="13"
                        @if ( $managements->contains(13) )
                            checked
                        @endif
                >
                <label for="dial"> Dialysis </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="alk_l"
                        name="managements[]"
                        value="3"
                        @if ( $managements->contains(3) )
                            checked
                        @endif
                >
                <label for="alk_l"> Alkalinization </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="btr_pex"
                        name="managements[]"
                        value="10"
                        @if ( $managements->contains(10) )
                            checked
                        @endif
                >
                <label for="btr_pex"> Blood transfusion/Plasma expanders </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="nhc3"
                        name="managements[]"
                        value="22"
                        @if ( $managements->contains(22) )
                            checked
                        @endif
                >
                <label for="nhc3"> NaHCO3 given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="dop_m"
                        name="managements[]"
                        value="14"
                        @if ( $managements->contains(14) )
                            checked
                        @endif
                >
                <label for="dop_m"> Dopamine given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="ana_g"
                        name="managements[]"
                        value="4"
                        @if ( $managements->contains(4) )
                            checked
                        @endif
                >
                <label for="ana_g"> Analgesics given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="cal_glu"
                        name="managements[]"
                        value="11"
                        @if ( $managements->contains(11) )
                            checked
                        @endif
                >
                <label for="cal_glu"> Calcium gluconate given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="ant_bio"
                        name="managements[]"
                        value="5"
                        @if ( $managements->contains(5) )
                            checked
                        @endif
                >
                <label for="ant_bio"> Antibiotics given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="pre_sal"
                        name="managements[]"
                        value="24"
                        @if ( $managements->contains(24) )
                            checked
                        @endif
                >
                <label for="pre_sal"> Prednisalone given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="nacl"
                        name="managements[]"
                        value="21"
                        @if ( $managements->contains(21) )
                            checked
                        @endif
                >
                <label for="nacl"> NaCl given </label>
            </div>

            <div>
                <input  type="checkbox"
                        id="met_cor"
                        name="managements[]"
                        value="20"
                        @if ( $managements->contains(20) )
                            checked
                        @endif
                >
                <label for="met_cor"> Methylprednisolone/Corticosteroids </label>
            </div>

            <div>
                <label for="man_oth"> If others </label>
                <input  type="text"
                        id="man_oth"
                        name="management_others"
                        value="{{ $incident->management_others }}"
                        size="55"
                >
            </div>

            <div>
                <h5> Gastrointestinal decontamination : </h5>

                <div>
                    <input  type="checkbox"
                            id="gas_asp"
                            name="managements[]"
                            value="15"
                            @if ( $managements->contains(15) )
                                checked
                            @endif
                    >
                    <label for="gas_asp"> Gastric aspiration </label>
                </div>

                <div>
                    <div>
                        <input  type="checkbox"
                                id="act_chr"
                                name="managements[]"
                                value="1"
                                @if ( $managements->contains(1) )
                                    checked
                                @endif
                                onChange=toggleActDos()
                        >
                        <label for="act_chr"> Activated chracol </label>
                    </div>

                    <div>
                        <label for="act_dos"> Number of does </label>
                        <input type="number"
                               id="act_dos"
                               min="0"
                               name="act_chr_doses"
                               value="{{ $toxicity->activated_chracol_doses }}"
                        >
                    </div>

                    <script>
                        function toggleActDos(){
                            let act_given = document.getElementById("act_chr").checked;
                            document.getElementById("act_dos").disabled = !act_given;
                        }
                        toggleActDos();
                    </script>

                </div>
            </div>

            <div>
                <h5> Antidote : </h5>

                <div>
                    <input  type="checkbox"
                            id="ant_do"
                            name="managements[]"
                            value="7"
                            @if ( $managements->contains(7) )
                                checked
                            @endif
                            onChange=toggleAntidote()
                    >
                    <label for="ant_do"> Antidote given </label>
                </div>

                <div>
                    <label for="ant_type">type of antidote </label>
                    <input type="text"
                           id="ant_type"
                           name="antidote"
                           value="{{ $toxicity->antidote }}"
                    >
                </div>

                <script>
                    function toggleAntidote(){
                        let act_given = document.getElementById("ant_do").checked;
                        document.getElementById("ant_type").disabled = !act_given;
                    }
                    toggleAntidote()
                </script>
            </div>
        </div>

        <!----------------------------------------- Laboratory Detail -------------------------------------------->
        <div>
            <h4>Laboratory Detail</h4>
            <label for="lab_detail"></label>
            <textarea rows="13" cols="150"
                      name="Laboratory Detail"
                      placeholder="Enter laboratory detail here"
                      id="lab_detail"
            ></textarea>
        </div>

        <!----------------------------------------- Save / Submit ------------------------------------------------>
        <div>
            <h4>Save/Submit</h4>
            <div>
                <label for="sub_com"> Comment : </label>
                <input type="text"
                       id="sub_com"
                       name="comments"
                       placeholder="Enter Comments here"
                       value="{{ $incident->comments }}"
                />
            </div>

            <button type="submit"
                    name="save"
                    value="save">
                save
            </button>
        </div>
    </form>
</div>
@endsection
