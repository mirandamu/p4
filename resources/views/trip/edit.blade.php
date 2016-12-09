@extends('layouts.master')

@section('title')
    Edit Trip to {{ $trip->destination }}
@stop

@section('content')

    <form method='POST' action='/trips/{{ $trip->id }}'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <h1>Edit Your Trip To <em>{{ $trip->destination }}</em></h1>

        <label for="origin">Traveling from:
        <input type="text" id="origin" name="origin" value="{{ old('origin', $trip->origin) }}"></label>*
        <span class="error">{{ $errors->first('origin')}}</span><br>

        <label for="destination">Traveling to:
        <input type="text" id="destination" name="destination" value="{{ old('destination', $trip->destination) }}"></label>*
        <span class="error">{{ $errors->first('destination')}}</span><br>

        <fieldset>
            <legend>Departure Flight</legend>
            <label for="departure_date">Date:
            <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date', $trip->departure_date) }}"></label>*
            <span class="error">{{ $errors->first('departure_date')}}</span><br>

            <label for="departure_time">Time:
            <input type="text" id="departure_time" name="departure_time" value="{{ old('departure_time', $trip->departure_time) }}"></label>
            <span class="error">{{ $errors->first('departure_time')}}</span><br>

            <label for="departure_airline">Airline:
            <input type="text" id="departure_airline" name="departure_airline" value="{{ old('departure_airline', $trip->departure_airline) }}"></label>
            <span class="error">{{ $errors->first('departure_airline')}}</span><br>

            <label for="departure_confirmation">Flight confirmation:
            <input type="text" id="departure_confirmation" name="departure_confirmation" value="{{ old('departure_confirmation', $trip->departure_confirmation) }}"></label>
            <span class="error">{{ $errors->first('departure_confirmation')}}</span><br>       

            <label for="departure_flight_number">Flight number:
            <input type="text" id="departure_flight_number" name="departure_flight_number" value="{{ old('departure_flight_number', $trip->departure_flight_number) }}"></label>
            <span class="error">{{ $errors->first('departure_flight_number')}}</span><br>
        </fieldset>
        
        <fieldset>
            <legend>Return Flight</legend>
            <label for="return_date">Date:
            <input type="date" id="return_date" name="return_date" value="{{ old('return_date', $trip->return_date) }}"></label>*
            <span class="error">{{ $errors->first('return_date')}}</span><br>

            <label for="return_time">Time:
            <input type="text" id="return_time" name="return_time" value="{{ old('return_time', $trip->return_time) }}"></label>
            <span class="error">{{ $errors->first('return_time')}}</span><br>

            <label for="return_airline">Airline:
            <input type="text" id="return_airline" name="return_airline" value="{{ old('return_airline', $trip->return_airline) }}"></label>
            <span class="error">{{ $errors->first('return_airline')}}</span><br>

            <label for="return_confirmation">Flight confirmation:
            <input type="text" id="return_confirmation" name="return_confirmation" value="{{ old('return_confirmation', $trip->return_confirmation) }}"></label>
            <span class="error">{{ $errors->first('return_confirmation')}}</span><br>       

            <label for="return_flight_number">Flight number:
            <input type="text" id="return_flight_number" name="return_flight_number" value="{{ old('return_flight_number', $trip->return_flight_number) }}"></label>
            <span class="error">{{ $errors->first('return_flight_number')}}</span><br>
        </fieldset>

        <fieldset>
            <legend>Accomodation</legend>
            <label for="accomodation_name">Accomodation name:
            <input type="text" id="accomodation_name" name="accomodation_name" size="30" value="{{ old('accomodation_name', $trip->accomodation_name) }}"></label>
            <span class="error">{{ $errors->first('accomodation_name')}}</span><br>

            <label for="accomodation_address">Accomodation address:
            <input type="text" id="accomodation_address" name="accomodation_address" size="55" value="{{ old('accomodation_address', $trip->accomodation_address) }}"></label>
            <span class="error">{{ $errors->first('accomodation_address')}}</span><br>
        </fieldset>

        <span class="tagspan">Add tags:</span>
        @foreach($tags_for_checkboxes as $tag_id => $tag_name)
            <label class="tag" for="{{ $tag_name }}">
            <input type="checkbox" value="{{ $tag_id }}" name="tags[]" id="{{ $tag_name }}" {{ (in_array($tag_name, $tags_for_this_trip)) ? 'checked' : '' }}> {{ $tag_name }} </label><br>
        @endforeach
        
        <input type="submit" value="Save Changes"><br>
        <a class="otheropts" href="/trips">Go back to dashboard without making changes</a><br>
        <a class="otheropts" href="/trips/{{ $trip->id }}/delete">Delete Trip</a>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@endsection