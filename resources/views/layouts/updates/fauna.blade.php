@extends('layouts.updates.main')

@section('main_group', ' Natural')

@section('sub_group', 'floras')

@section('poison_details')

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
        <label for="area"> 03) Region : </label>
        <select id="area" name="area">
            <option value = " "> ..Please choose one option.. </option>
            <option value = "Chankanai"> Chankanai </option>
            <option value = "Chavakachcheri"> Chavakachcheri  </option>
            <option value = "Delft"> Delft  </option>
            <option value = "Jaffna"> Jaffna  </option>
            <option value = "Karainagar"> Karainagar  </option>
            <option value = "Karaveddy"> Karaveddy  </option>
            <option value = "Kayts"> Kayts  </option>
            <option value = "Kopay"> Kopay  </option>
            <option value = "Maruthankerney"> Maruthankerney  </option>
            <option value = "Nallur"> Nallur  </option>
            <option value = "Point Pedro"> Point Pedro  </option>
            <option value = "Sandilipay"> Sandilipay  </option>
            <option value = "Tellippalai"> Tellippalail  </option>
            <option value = "Uduvil"> Uduvil  </option>
            <option value = "Velanai"> Velanai  </option>
            <option value = "Outside Jaffna District"> Outside Jaffna District </option>
        </select>

        <script>
            let area = "{{$incident->area}}";
            let att = document.createAttribute("selected");
            document.getElementById(area).setAttributeNode(att);
        </script>
    </div>

    <br>

    <div>
        <label for="place_of_sting"> 04) Place of bite/sting : </label>
        <select id="place_of_sting" name="place_of_sting">
            <option value = " "> ..Please choose one option.. </option>
            <option value = "Forest"> Forest </option>
            <option value = "Garden"> Garden  </option>
            <option value = "Indoor"> Indoor </option>
            <option value = "Paddy-field"> Paddy-field </option>
            <option value = "Road"> Road </option>
            <option value = "Roots"> Roots </option>
            <option value = "Unutilized land"> Unutilized land </option>
        </select>

        <div>
            <label for="oth_pl"> If other place, specify : </label>
            <input id="oth_pl" type="text" name = "place_of_sting">
        </div>

        <script>
            let pos = "{{ $toxicity->place_of_sting }}";
            let att = document.createAttribute("selected");
            document.getElementById(pos).setAttributeNode(att);
        </script>
    </div>

    <br>

    <div>
        <label for="circumstance"> 05) Circumstances of stings/bite : </label>
        <select id="circumstance" name="circumstance">
            <option value = " "> ..Please choose one option.. </option>
            <option value = "Provoked">  Provoked   </option>
            <option value = "Unprovoked"> Unprovoked </option>
        </select>

        <script>
            let circumstance = "{{ $toxicity->circumstance }}";
            let att = document.createAttribute("selected");
            document.getElementById(circumstance).setAttributeNode(att);
        </script>
    </div>

    <br>

    <div>
        <label for="sting_site"> 06) Bite site/Sting site : </label>
        <select id="sting_site" name="sting_site">
            <option value = " "> ..Please choose one option.. </option>
            <option value = "Abdomen"> Abdomen </option>
            <option value = "Foot & ankle"> Foot & ankle </option>
            <option value = "Head & Neck">  Head & Neck   </option>
            <option value = "Leg"> Leg </option>
            <option value = "Upper Limb"> Upper Limb </option>
        </select>

        <script>
            let sting_site = "{{ $toxicity->sting_site }}";
            let att = document.createAttribute("selected");
            document.getElementById(sting_site).setAttributeNode(att);
        </script>
    </div>

    <br>

    <div>
        <label for="number_of_stings"> 07) Number of stings : </label>
        <input id="number_of_stings"
               type="number"
               min="0"
               name="number_of_stings"
               value="{{ $toxicity->number_of_stings }}"
        >
    </div>


@endsection

@section('managements')

    <div>

        <br>

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

        <br>

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

@endsection

