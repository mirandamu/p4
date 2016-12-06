@extends('layouts.master')

@section('title')
    Add a New Trip
@endsection

@section('content')
    <h1>Add a New Trip</h1>
    <form method='POST' action='/trips'>

        {{ csrf_field() }}
        
        <label for="origin">Traveling from:
        <input type="text" id="origin" name="origin" value="{{ old('origin', 'New York, NY') }}"></label>*
        <div class="error">{{ $errors->first('origin')}}</div>

        <label for="destination">Traveling to:
        <input type="text" id="destination" name="destination" value="{{ old('destination', 'Boston, MA') }}"></label>*
        <div class="error">{{ $errors->first('destination')}}</div>

        <label for="purpose">Purpose of trip:
        <input type="text" id="purpose" name="purpose" value="{{ old('purpose', 'Leisure') }}"></label>
        <div class="error">{{ $errors->first('purpose')}}</div>

        <fieldset>
            <legend>Departure Flight</legend>
            <label for="departure_date">Date:
            <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date', '2017-01-18') }}"></label>*
            <div class="error">{{ $errors->first('departure_date')}}</div>

            <label for="departure_time">Time:
            <input type="text" id="departure_time" name="departure_time" value="{{ old('departure_time', '18:00') }}"></label>
            <div class="error">{{ $errors->first('departure_time')}}</div>

            <label for="departure_airline">Airline:
            <input type="text" id="departure_airline" name="departure_airline" value="{{ old('departure_airline', 'Delta') }}"></label>
            <div class="error">{{ $errors->first('departure_airline')}}</div>

            <label for="departure_confirmation">Flight confirmation:
            <input type="text" id="departure_confirmation" name="departure_confirmation" value="{{ old('departure_confirmation', 'JOMFH12') }}"></label>
            <div class="error">{{ $errors->first('departure_confirmation')}}</div>       

            <label for="departure_flight_number">Flight number:
            <input type="text" id="departure_flight_number" name="departure_flight_number" value="{{ old('departure_flight_number', 'DT891') }}"></label>
            <div class="error">{{ $errors->first('departure_flight_number')}}</div>
        </fieldset>
        
        <fieldset>
            <legend>Return Flight</legend>
            <label for="return_date">Date:
            <input type="date" id="return_date" name="return_date" value="{{ old('return_date', '2017-01-28') }}"></label>*
            <div class="error">{{ $errors->first('return_date')}}</div>

            <label for="return_time">Time:
            <input type="text" id="return_time" name="return_time" value="{{ old('return_time', '11:00') }}"></label>
            <div class="error">{{ $errors->first('return_time')}}</div>

            <label for="return_airline">Airline:
            <input type="text" id="return_airline" name="return_airline" value="{{ old('return_airline', 'Delta') }}"></label>
            <div class="error">{{ $errors->first('return_airline')}}</div>

            <label for="return_confirmation">Flight confirmation:
            <input type="text" id="return_confirmation" name="return_confirmation" value="{{ old('return_confirmation', 'JOMFH12') }}"></label>
            <div class="error">{{ $errors->first('return_confirmation')}}</div>       

            <label for="return_flight_number">Flight number:
            <input type="text" id="return_flight_number" name="return_flight_number" value="{{ old('return_flight_number', 'DT7841') }}"></label>
            <div class="error">{{ $errors->first('return_flight_number')}}</div>
        </fieldset>

        <fieldset>
            <legend>Accomodation</legend>
            <label for="accomodation_name">Accomodation name:
            <input type="text" id="accomodation_name" name="accomodation_name" size="30" value="{{ old('accomodation_name', 'Holiday Inn') }}"></label>
            <div class="error">{{ $errors->first('accomodation_name')}}</div>

            <label for="accomodation_address">Accomodation address:
            <input type="text" id="accomodation_address" name="accomodation_address" size="55" value="{{ old('accomodation_address', '120 Warren Ave, Allston, MA 02134') }}"></label>
            <div class="error">{{ $errors->first('accomodation_address')}}</div>
        </fieldset>

        <button type="submit">Add Trip</button>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>

@endsection