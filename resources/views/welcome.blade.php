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
      <li>All in one straightforward, easy-to-navigate interface</li>
    </ul><br>
    <img src="{{ URL::asset('/images/carwithmap.jpg') }}" alt="Toy car on paper map">
    <span style="display:none;"><a href="https://www.pexels.com/photo/holidays-car-travel-adventure-21014/">Stock photo source</a></span>
  </div>
@endsection