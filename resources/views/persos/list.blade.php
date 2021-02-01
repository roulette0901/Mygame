@extends('layouts.default')

@section('title')
    Persos
@endsection

@section('wrapper')
    <h1>Liste des persos</h1>
    @if (Auth::user())
    <h2><a href="/persos/create">Ajouter un perso</a></h2>
    @endif
    <ul>
        @each('persos.one', $persos, 'perso')
    </ul>
@endsection