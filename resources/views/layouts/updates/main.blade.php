@extends('layouts.app')

@section('content')
<!------------------------ Detail form heading  -------------------------------------------------------->
<h2> Patient Detail : @yield('title') Poison </h2>
<h4> @yield('main_group') Toxin : @yield('sub_group') </h4>

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
            @yield('poison_details')
        </div>

        <!-------------------------- Clinical Features ------------------------------------------------------>
        <div>
            <h4>Clinical Features</h4>

            <h5> @yield('general_symptoms_name') </h5>

            @foreach($form_symptoms as $checkbox)
                @continue($checkbox->pivot->category != 'general')
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

            @yield('symptoms')

            <div>
                <label for="cli_oth"> If others <br></label>
                <input  type="text"
                        id="cli_oth"
                        name="symptom_others"
                        value="{{ $incident->symptom_others }}"
                >
            </div>

            <br>

        </div>

        <!----------------------------------------- Management Details -------------------------------------------->
        <div>
            <h4> Management Details </h4>

            @foreach($form_managements as $checkbox)
                @continue($checkbox->pivot->category != 'general')
                <div>
                    <input  type="checkbox"
                            id="{{ $checkbox->name }}"
                            name="managements[]"
                            value="{{ $checkbox->id }}"
                        @if ( $managements->contains($checkbox->id) )
                            checked
                        @endif
                    >
                    <label for="{{ $checkbox->name }}"> {{ $checkbox->name }} </label>
                </div>
            @endforeach

            @yield('managements')

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
