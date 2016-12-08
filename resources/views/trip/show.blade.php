@extends('layouts.master')

@section('title')
    Your Trip to {{ $trip->destination }}
@endsection

@section('content')
    <h1>Your Trip to {{ $trip->destination }}</h1>
    <a href='/trips/{{ $trip->id }}/edit'>Edit Trip</a>
    <a href='/trips/{{ $trip->id }}/delete'>Delete Trip</a>
    <a href='/trips'>Back to Dashboard</a>

    <h1>Your trip from {{ $trip->origin }} to {{ $trip->destination }}</h1>

    <p>Tags:
    @foreach($trip->tags as $tag)
        {{ $tag->name }} 
    @endforeach
    </p>


@endsection