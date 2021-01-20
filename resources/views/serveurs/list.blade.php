@extends('layouts.default')

@section('title')
    Serveurs
@endsection

@section('wrapper')
    <h1>Liste des Serveurs</h1>
    <h2><a href="/serveurs/create">Ajouter une Serveur</a></h2>
    <ul>
        @each('serveurs.one', $serveurs, 'Serveur')
    </ul>
@endsection