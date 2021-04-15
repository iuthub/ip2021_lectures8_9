@if(session('info'))
    <x-alert type="success">
        {{ session('info') }}
    </x-alert>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <x-alert type="error">
            {{ $error }}
        </x-alert>
    @endforeach
@endif

<h2>Add Contact</h2>
<div class="add">
    <form class="addContactForm" action="{{ route('add') }}" method="post">
        @csrf

        <label for="fullname">Name:</label>
        <input type="text" name="fullname"  value="{{ old('fullname') }}" id="fullname">
        <label for="email">Email:</label>
        <input type="text" name="email"  value="{{ old('email') }}" id="email">
        <input type="checkbox" value="Family" name="categories[]"> Family
        <input type="checkbox" value="Friend" name="categories[]"> Friends
        <input type="checkbox" value="Work" name="categories[]"> Work
        <input type="submit" style="width: 100px;margin: 10px;" value="Add">
    </form>
</div>
