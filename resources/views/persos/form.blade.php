@extends('layouts.default')

@section('title')
    persos - Ajouter
@endsection

@section('wrapper')
    <form action="/persos" method="post">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
        
        <p>
            <select name="metier" id="metier">
                @foreach($metiers as $metier)
                    <option value="{{ $metier->id }}"> {{ $metier->name }} </option>
                @endforeach
            </select>
        </p>
        <p>
            <input type="submit">
        </p>
        <p>
            <button><a href="/persos">Annuler</a></button>
        </p>
    </form>
@endsection