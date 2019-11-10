@extends('layouts.updates.flora')

@section('title', 'Endaru')

@section('general_symptoms_name', 'Ingestion')

@section('symptoms')

    <br>

    <div>

        <h5> Inhalation</h5>

        @foreach($form_symptoms as $checkbox)
            @continue($checkbox->pivot->category != 'inhalation')
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
