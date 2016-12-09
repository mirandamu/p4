@extends('layouts.master')

@section('title')
    Traveler's Best Friend
@endsection

@section('content')
  <div id="frontpage">
    <h1>Meet your new best friend</h1> 
    <ul>
      <li>Your essential travel information in one place</li>
      <li>Look back on previous trips to help plan your next one</li>
      <li>All in a straightforward, easy-to-navigate interface</li>
    </ul><br>
    <img width="100%" src="{{ URL::asset('/images/carwithmap.jpg') }}" alt="Toy car on paper map">
    
    
  </div>
@endsection