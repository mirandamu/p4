@extends('layouts.master')

@section('title')
    Your Trip to {{ $trip->destination }}
@endsection

@section('content')
    <div class="tripinformation">
        <section>
            <h1>Your Trip To <em>{{ $trip->destination }}</em></h1>
            <ul class="usernav">
                <li><a href='/trips/{{ $trip->id }}/edit'>Edit</a></li>
                <li><a href='/trips/{{ $trip->id }}/delete'>Delete</a></li>
            </ul>
        </section>
        <section class="tripoverview">
            <h2>Trip Overview</h2>
            Origin: {{ $trip->origin }}<br>
            Destination: {{ $trip->destination }}<br>
            Departure date: {{ date('D, M d, Y', strtotime($trip->departure_date)) }}<br>
            Return date: {{ date('D, M d, Y', strtotime($trip->return_date)) }}<br>
            Total number of days: {{ $number_days }}
        </section>
        <section class="tripdetails">
            <h2>Departure Flight</h2>
            Date: {{ date('D, M d, Y', strtotime($trip->departure_date)) }}<br>
            Time: {{ date('g:iA', strtotime($trip->departure_time)) }}<br>
            Airport: {{ $trip->departure_airport }}<br>
            Airline: {{ $trip->departure_airline }}<br>
            Flight confirmation: {{ $trip->departure_confirmation }}<br>
            Flight number: {{ $trip->departure_flight_number }}
        </section>
        <section class="tripdetails">
            <h2>Return Flight</h2>
            Date: {{ date('D, M d, Y', strtotime($trip->return_date)) }}<br>
            Time: {{ date('g:iA', strtotime($trip->return_time)) }}<br>
            Airport: {{ $trip->return_airport }}<br>
            Airline: {{ $trip->return_airline }}<br>
            Flight confirmation: {{ $trip->return_confirmation }}<br>
            Flight number: {{ $trip->return_flight_number }} 
        </section>
        <section class="tripdetails">
            <h2>Accomodations</h2>
            Name: {{ $trip->accomodation_name }}<br>
            Address: {{ $trip->accomodation_address }}<br>
        </section>
        <section class="tripdetails">
            <h2>Tags</h2>
            <ul>
            @foreach($trip->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
            </ul>
        </section>
        <section class="tripdetails">
            <h2>Map</h2>
            <iframe
              width="100%"
              height="450"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDJXimpJkedKGb2hA3_OLSg80yP9us_Hi8
                &q={{ $trip->destination }}">
            </iframe>
        </section>
        <section class="tripdetails">
            <h2>Notes</h2>
            <pre>{{ $trip->notes }}</pre>
        </section>
    </div>

@endsection
