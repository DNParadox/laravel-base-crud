@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>

   @foreach ($comics as $comic)
   <div>
        <div> <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Title : {{ $comic->title }}</a> </div>
        <div> Type : {{ $comic->type }}</div>
        <div> <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"> dettagli fumetto</a></div>
   
    </div>
       
   @endforeach
@endsection