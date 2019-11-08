@extends('layouts.updates.flora')

@section('title', 'Kaneru')

@section('symptoms')

    <br>

    <div>

        <h5> HB </h5>

        @foreach($form_symptoms as $checkbox)
            @continue($checkbox->pivot->category != 'hb')
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
