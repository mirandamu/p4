@extends('layouts.master')

@section('title')
    Confirm Deletion: Trip to {{ $trip->destination }}
@endsection

@section('content')
    <h1>Confirm Deletion</h1>

    <form class="confirmdelete" method='POST' action='/trips/{{ $trip->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <section class="tripoverview">
            <h2>Trip Overview</h2>
            Origin: {{ $trip->origin }}<br>
            Destination: {{ $trip->destination }}<br>
            Departure date: {{ date('D, M d, Y', strtotime($trip->departure_date)) }}<br>
            Return date: {{ date('D, M d, Y', strtotime($trip->return_date)) }}<br>
        </section>
        
        <p>Are you sure you want to delete your trip to <em>{{ $trip->destination }}</em>?</p>
        <input type='submit' value='Delete This Trip'><a href='/trips/{{ $trip->id }}'>View Trip Details</a>
    </form>

@endsection