@extends('layouts.app')

@section('main_content')


    <div>
       <h1> Title : {{ $comic->title }} </h1>
       <img src="{{ $comic->thumb }}" alt="">
        <div> Type : {{ $comic->type }}</div>
    </div>
    
@endsection