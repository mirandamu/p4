@extends('layouts.master')

@section('title')
    Welcome Back to Traveler's Best Friend
@endsection

@section('content')
    <section class="header">
        <h1>Welcome Back, {{ Auth::user()->name }}</h1>
        <ul class="usernav">
            <li><a href='/trips/create'>Add New Trip</a></li>
            <li><a href=''>View Past Trips</a></li>
        </ul>
    </section>

    <section>
        <h2>Upcoming Trips</h2>
        @if(sizeof($trips) == 0)
            You currently do not have any upcoming trips. Start planning one!
        @else
            @foreach($trips as $trip)
                <div class="individualtrip">
                    <h3><a href='/trips/{{ $trip->id }}'>{{ $trip->destination }}</a></h3>
                    Traveling from {{ $trip->origin }}<br>
                    {{ date('D, M d, Y', strtotime($trip->departure_date)) }} - {{ date('D, M d, Y', strtotime($trip->return_date)) }}<br><br>
                    <ul>   
                        <li><a href='/trips/{{ $trip->id }}'>View</a></li>
                        <li><a href='/trips/{{ $trip->id }}/edit'>Edit</a></li>
                        <li><a href='/trips/{{ $trip->id }}/delete'>Delete</a></li>
                    </ul>
                </div>
            @endforeach
        @endif
    </section>
@endsection

