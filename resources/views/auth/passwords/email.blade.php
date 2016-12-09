@extends('layouts.master')

@section('title')
    Password Retrieval for Traveler's Best Friend
@endsection

@section('content')
        <form method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            
            <h1>Reset Password</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <label for="email">Email Address<br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required></label>
            <span class="error">{{ $errors->first('email') }}</span><br><br>

            <input type="submit" value="Send Password Reset Link">
        </form>
@endsection
