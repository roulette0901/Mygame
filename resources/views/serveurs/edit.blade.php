@extends('layouts.default')

@section('title')
    Serveur - Modifier
@endsection

@section('wrapper')

    <form action="/serveurs/{{ $serveur->id }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $serveur->name }}">
        <input type="submit">
        <button><a href="/serveurs">Annuler</a></button>
    </form>
@endsection