@extends('layouts.default')

@section('title')
    persos
@endsection

@section('wrapper')
    <h1>Liste des persos</h1>
    <h2><a href="/persos/create">Ajouter un perso</a></h2>
    <ul>
        @each('persos.one', $persos, 'perso')
    </ul>
@endsection