@extends('layouts.master')

@section('title')
    Welcome Back to Traveler's Best Friend
@endsection

@section('content')
    <h1>Welcome Back, {{ Auth::user()->name }}</h1>
    <a href='/trips/create'>Add a New Trip</a>
    <a href=''>View Past Trips</a>

    <h2>View Upcoming Trips</h2>
    @if(sizeof($trips) == 0)
        You have not added any trips, you can <a href='/trips/create'>add a trip now to get started</a>.
    @else
        @foreach($trips as $trip)
            <a href='/trips/{{ $trip->id }}'><h3>{{ $trip->destination }}</h3></a>
            <a href='/trips/{{ $trip->id }}/edit'>Edit</a>
            <a href='/trips/{{ $trip->id }}'>View</a>
            <a href='/trips/{{ $trip->id }}/delete'>Delete</a>
        @endforeach
        </div>
    @endif
@endsection