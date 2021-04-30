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