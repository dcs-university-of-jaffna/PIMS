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

