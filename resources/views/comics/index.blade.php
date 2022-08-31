@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>

   @foreach ($comics as $comic)
   <div>
        <div> Title : {{ $comic->title }} </div>
        
        <div> Type : {{ $comic->type }}</div>

      
        <div>
             <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli fumetto</a>
        </div>

        <div>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica Fumetto</a>
        </div>

        <div>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')
                {{-- onClick: Al Click, chiederà se vo  --}}
                <input type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare?');">
            </form>
        </div>
    </div>

    <br>
       
   @endforeach
@endsection