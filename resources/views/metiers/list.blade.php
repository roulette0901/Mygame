@extends('layouts.default')

@section('title')
    metiers
@endsection

@section('wrapper')
    <h1>Liste des metiers</h1>
    <h2><a href="/metiers/create">Ajouter une metier</a></h2>
    <ul>
        @each('metiers.one', $metiers, 'metier')
    </ul>
@endsection