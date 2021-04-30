@extends('layout.master')

@section('content')
    @include('partials.info')
    <h2>Login</h2>
    <div class="add">
        <form class="addContactForm" action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email"  value="{{ old('email') }}" id="email">
                @error('email')
                <div class="inline_error"> {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                @error('password')
                <div class="inline_error"> {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" style="width: 100px;margin: 10px;" value="Login">
{{--                <a href="{{ route('password.request') }}">Forgot?</a> &nbsp; | &nbsp;--}}
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
@endsection
