@extends('layouts.master')

@section('title')
    Confirm deletion: Trip to {{ $trip->destination }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/trips/{{ $trip->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete your trip to <em>{{ $trip->destination }}</em>?</h2>

        <input type='submit' value='Yes'>
        
    </form>

@endsection