@extends('layouts.updates.flora')

@section('title', 'Aththana')

@section('symptoms')

    <br>

    <div>

        <h5> CNS effects :</h5>

        @foreach($form_symptoms as $checkbox)
            @continue($checkbox->pivot->category != 'cns effects')
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
