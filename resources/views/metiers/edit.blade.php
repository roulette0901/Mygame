@extends('layouts.default')

@section('title')
    equipes - Modifier
@endsection

@section('wrapper')
    <form action="/metiers/{{ $metier->id }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $metier->name }}">
        <input type="submit">
        <button><a href="/metiers">Annuler</a></button>
    </form>
@endsection