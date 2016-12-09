@extends('layouts.master')

@section('title')
    Login for Traveler's Best Friend
@endsection

@section('content')
        <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <h1>Login</h1>

            <label for="email">Email Address<br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus></label>
            <span class="error">{{ $errors->first('email') }}</span><br><br>

            <label for="password">Password<br>
            <input type="password" id="password" name="password" required></label>
            <span class="error">{{ $errors->first('password') }}</span><br><br>

            <label><input type="checkbox" name="remember"> Remember Me</label><br><br>

            <input type="submit" value="Login">

            <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </form>
@endsection
