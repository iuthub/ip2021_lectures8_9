@extends('layout.master')

@section('content')
    @include('partials.addContactForm')
    <h2>Contacts</h2>
    <div class="contacts">
        @foreach($contacts as $contact)
            <x-contact :contact="$contact"></x-contact>
        @endforeach
    </div>
@endsection
