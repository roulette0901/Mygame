@extends('layouts.default')

@section('title')
    metiers
@endsection

@section('wrapper')
    <h1>Liste des metiers</h1>
    @if (Auth::user())
    <h2><a href="/metiers/create">Ajouter un metier</a></h2>
    @endif
    <ul>
        @each('metiers.one', $metiers, 'metier')
    </ul>
@endsection