@extends('layouts.master')

@section('title')
    Register for Traveler's Best Friend
@endsection

@section('content')
        <form method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            
            <h1>Register</h1>
            
            <label for="name">Name<br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus></label>
            <span class="error">{{ $errors->first('name') }}</span><br><br>

            <label for="email">Email Address<br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required></label>
            <span class="error">{{ $errors->first('email') }}</span><br><br>

            <label for="password">Password<br>
            <input type="password" id="password" name="password" required></label>
            <span class="error">{{ $errors->first('password') }}</span><br><br>

            <label for="password-confirm">Password Confirm<br>
            <input type="password" id="password-confirm" name="password_confirmation" required></label><br><br>

            <label><input type="checkbox" name="remember"> Remember Me</label><br><br>

            <input type="submit" value="Register">
        </form>
@endsection
