@extends('layout.master')

@section('content')
    @include('partials.info')
    <h2>Register</h2>
    <div class="add">
        <form class="addContactForm" action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name"  value="{{ old('name') }}" id="name">
                @error('name')
                <div class="inline_error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email"  value="{{ old('email') }}" id="email">
                @error('email')
                <div class="inline_error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                @error('password')
                <div class="inline_error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="form-group">
                <input type="submit" style="width: 100px;margin: 10px;" value="Register">
                <a href="{{ route('login') }}">Login</a>
            </div>

        </form>
    </div>


@endsection
