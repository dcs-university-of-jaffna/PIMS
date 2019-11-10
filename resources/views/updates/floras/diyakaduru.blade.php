@extends('layouts.updates.flora')

@section('title', 'Diyakaduru')

@section('symptoms')

    <br>

    <div>

        <h5> CVS :</h5>

        @foreach($form_symptoms as $checkbox)
            @continue($checkbox->pivot->category != 'cvs')
            <div>
                <input type="checkbox"
                       id="{{ $checkbox->name }}"
                       name="symptoms[]"
                       value="{{ $checkbox->id }}"
                    @if ( $symptoms->contains( $checkbox->id ))
                       checked
                    @endif
                >
                <label for="{{ $checkbox->name }}"> {{ $checkbox->name }} </label>
            </div>
        @endforeach

    </div>

    <br>

    <div>

        <h5> Cardiac Dysrrhythmias :</h5>

        @foreach($form_symptoms as $checkbox)
            @continue($checkbox->pivot->category != 'cardiac dysrrhythmias')
            <div>
                <input type="checkbox"
                       id="{{ $checkbox->name }}"
                       name="symptoms[]"
                       value="{{ $checkbox->id }}"
                    @if ( $symptoms->contains( $checkbox->id ))
                       checked
                    @endif
                >
                <label for="{{ $checkbox->name }}"> {{ $checkbox->name }} </label>
            </div>
        @endforeach

    </div>

    <br>
@endsection
