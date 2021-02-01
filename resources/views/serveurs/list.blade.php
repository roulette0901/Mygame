@extends('layouts.default')

@section('title')
    Serveurs
@endsection

@section('wrapper')
    <h1>Liste des Serveurs</h1>
    @if (Auth::user())
    <h2><a href="/serveurs/create">Ajouter un Serveur</a></h2>
    @endif
    <ul>
        @each('serveurs.one', $serveurs, 'Serveur')
    </ul>
    
@endsection