<div class="contact">
    <div class="topRightCorner">
        <a href="{{ route('delete', ['id'=>$contact->id])  }}" class="delete">&times;</a>
    </div>
    <dl>
        <dt>Name:</dt>
        <dd>{{$contact->fullname}}</dd>
        <dt>Email:</dt>
        <dd>{{$contact->email}}</dd>
        <dt>Category:</dt>
        <dd>{{$contact->categories()->get()->map(function ($x){return $x->name;})->join(', ')}}</dd>
    </dl>
    <ul>
        <li>
            <form action="{{route('addNote', ['id'=>$contact->id])}}" method="post">
                @csrf
                <input type="text" name="note" value="">
                <input type="submit" value="Add Note">
            </form>
        </li>
        @foreach($contact->notes()->get() as $note)
            <li><a href="{{ route('deleteNote', ['id'=>$contact->id, 'noteId'=>$note->id]) }}"
                   class="delete">&times;</a> {{$note->note}}
            </li>
        @endforeach
    </ul>
</div>
