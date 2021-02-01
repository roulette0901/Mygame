@extends('layouts.default')

@section('title')
    serveurs - Ajouter
@endsection

@section('wrapper')
    <form action="/serveurs" method="post">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
            
        <p>
            <input type="submit">
        </p>
        <p>
            <button><a href="/serveurs">Annuler</a></button>
        </p>
    </form>
@endsection