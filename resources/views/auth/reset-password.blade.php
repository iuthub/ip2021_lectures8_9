@extends('layout.master')

@section('content')
    @include('partials.info')
    <h2>Update Password</h2>
    <div class="add">
        <form class="addContactForm" action="{{ route('password.update') }}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email"  value="{{ $request->email }}" id="email">
                @error('email')
                <div class="inline_error"> {{ $message }}</div>
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
                <input type="submit" style="width: 120px;margin: 10px;" value="Update">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
