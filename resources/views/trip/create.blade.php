@extends('layouts.master')

@section('title')
    Add New Trip
@endsection

@section('content')
    <form method='POST' action='/trips'>

        {{ csrf_field() }}

        <h1>Add New Trip</h1>
        
        <label for="origin">Traveling from:
        <input type="text" id="origin" name="origin" value="{{ old('origin', 'Boston, MA') }}" required autofocus></label>*
        <span class="error">{{ $errors->first('origin')}}</span><br>

        <label for="destination">Traveling to:
        <input type="text" id="destination" name="destination" value="{{ old('destination', 'Washington, DC') }}" required></label>*
        <span class="error">{{ $errors->first('destination')}}</span><br>

        <fieldset>
            <legend>Departure Flight</legend>
            <label for="departure_date">Date:
            <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date', '2017-04-06') }}" required></label>*
            <span class="error">{{ $errors->first('departure_date')}}</span><br>

            <label for="departure_time">Time:
            <input type="time" id="departure_time" name="departure_time" value="{{ old('departure_time', '10:00') }}"></label>
            <span class="error">{{ $errors->first('departure_time')}}</span><br>

            <label for="departure_airport">Airport:
            <input type="text" id="departure_airport" name="departure_airport" value="{{ old('departure_airport', 'BOS') }}"></label>
            <span class="error">{{ $errors->first('departure_airport')}}</span><br>

            <label for="departure_airline">Airline:
            <input type="text" id="departure_airline" name="departure_airline" value="{{ old('departure_airline', 'Delta') }}"></label>
            <span class="error">{{ $errors->first('departure_airline')}}</span><br>

            <label for="departure_confirmation">Flight confirmation:
            <input type="text" id="departure_confirmation" name="departure_confirmation" value="{{ old('departure_confirmation', 'JOMFH12') }}"></label>
            <span class="error">{{ $errors->first('departure_confirmation')}}</span><br>       

            <label for="departure_flight_number">Flight number:
            <input type="text" id="departure_flight_number" name="departure_flight_number" value="{{ old('departure_flight_number', 'DT891') }}"></label>
            <span class="error">{{ $errors->first('departure_flight_number')}}</span><br>
        </fieldset>
        
        <fieldset>
            <legend>Return Flight</legend>
            <label for="return_date">Date:
            <input type="date" id="return_date" name="return_date" value="{{ old('return_date', '2017-04-10') }}" required></label>*
            <span class="error">{{ $errors->first('return_date')}}</span><br>

            <label for="return_time">Time:
            <input type="time" id="return_time" name="return_time" value="{{ old('return_time', '15:20') }}"></label>
            <span class="error">{{ $errors->first('return_time')}}</span><br>

            <label for="return_airport">Airport:
            <input type="text" id="return_airport" name="return_airport" value="{{ old('return_airport', 'IAD') }}"></label>
            <span class="error">{{ $errors->first('return_airport')}}</span><br>

            <label for="return_airline">Airline:
            <input type="text" id="return_airline" name="return_airline" value="{{ old('return_airline', 'Delta') }}"></label>
            <span class="error">{{ $errors->first('return_airline')}}</span><br>

            <label for="return_confirmation">Flight confirmation:
            <input type="text" id="return_confirmation" name="return_confirmation" value="{{ old('return_confirmation', 'JOMFH12') }}"></label>
            <span class="error">{{ $errors->first('return_confirmation')}}</span><br>       

            <label for="return_flight_number">Flight number:
            <input type="text" id="return_flight_number" name="return_flight_number" value="{{ old('return_flight_number', 'DT7841') }}"></label>
            <span class="error">{{ $errors->first('return_flight_number')}}</span><br>
        </fieldset>

        <fieldset>
            <legend>Accomodation</legend>
            <label for="accomodation_name">Accomodation name:
            <input type="text" id="accomodation_name" name="accomodation_name" size="30" value="{{ old('accomodation_name', 'Holiday Inn') }}"></label>
            <span class="error">{{ $errors->first('accomodation_name')}}</span><br>

            <label for="accomodation_address">Accomodation address:
            <input type="text" id="accomodation_address" name="accomodation_address" size="55" value="{{ old('accomodation_address', '852 Avenue A, Washington, DC 13862') }}"></label>
            <span class="error">{{ $errors->first('accomodation_address')}}</span><br>
        </fieldset>

        <span class="tagspan">Add tags:</span>
        @foreach($tags_for_checkboxes as $tag_id => $tag_name)
            <label class="tag" for="{{ $tag_name }}">
            <input type="checkbox" value="{{ $tag_id }}" name="tags[]" id="{{ $tag_name }}"> {{ $tag_name }} </label><br>
        @endforeach
        <br>

        <label for="notes">Additional notes:</label><br>
        <textarea name="notes" id="notes" rows="5" cols="50">{{ old('notes', 'Need to book rental car') }}</textarea>
        <br>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

        <input type="submit" value="Add Trip"/>

    </form>

@endsection