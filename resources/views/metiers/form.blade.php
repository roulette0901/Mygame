@extends('layouts.default')

@section('title')
    metiers - Ajouter
@endsection

@section('wrapper')
    <form action="/metiers" method="post">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
        
        </p> 
            
        <p>
            <input type="submit">
        </p>
        <p>
            <button><a href="/metiers">Annuler</a></button>
        </p>
    </form>
@endsection