@extends('layout.master')

@section('content')
    <form action="{{route('logout')}}" method="post" style="text-align: right">
        @csrf
        {{ Auth::user()->name }}
        <input type="submit" value="Log out">
    </form>

    @include('partials.addContactForm')
    <h2>Contacts</h2>
    <div class="contacts">
        @foreach($contacts as $contact)
            <x-contact :contact="$contact"></x-contact>
        @endforeach
    </div>
@endsection
