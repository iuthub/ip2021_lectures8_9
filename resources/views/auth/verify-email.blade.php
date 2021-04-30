@extends('layout.master')

@section('content')
    @include('partials.info')
    <h2>Verify Email</h2>
    <div class="add">
        <form class="addContactForm" action="{{ route('verification.send') }}" method="post">
            @csrf
            You must verify your email now. Please, check your email.
            <input type="submit" style="width: 100px;margin: 10px;" value="Resend Email">
        </form>
    </div>
@endsection
