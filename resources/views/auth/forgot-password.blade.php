@extends('layout.master')

@section('content')
    @include('partials.info')
    <h2>Forgot Password</h2>
    <div class="add">
        <form class="addContactForm" action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email"  value="{{ old('email') }}" id="email">
                @error('email')
                <div class="inline_error"> {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" style="width: 120px;margin: 10px;" value="Send Reset Link">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
