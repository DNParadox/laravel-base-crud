@extends('layouts.app')

@section('main_content')

    <h1>Suggerisci un prodotto</h1>
    <h3>da aggiungere al nostro Store</h3>

    <form action="{{ route('comics.store') }}" method="post">

        @csrf

        <div>
            <label for="thumb">Url Immagine</label>
            <input type="text" id='thumb' name="thumb">
        </div>
        
        <br>

        <div>
            <label for="type">Genere del fumetto</label>
            <input type="text" id='type' name="type">
        </div>
        
        <br>

        <div>
            <label for="title"> Titolo</label>
            <input type="text" id='title' name="title">
        </div>

        <br>

        <div>
            <label for="price"> Prezzo</label>
            <input type="text" id='price' name="price">
        </div>

        <br>

        <div>
            <label for="series"> Serie</label>
            <input type="text" id="series" name="series">
        </div>

        <br>

        <div>
            <label for="sale_date"> Anno di uscita</label>
            <input type="text" id='sale_date' name="sale_date">
        </div>
        
        <br>

        <div>
            <label for="description"> Descrizione fumetto</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <br>


        <button> Salva</button>
        

    </form>

    
@endsection