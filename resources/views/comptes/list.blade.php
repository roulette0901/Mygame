@extends('layouts.default')

@section('title')
    comptes
@endsection

@section('wrapper')
    <h1>Liste des Comptes</h1>
    @if (Auth::user())
    <h2><a href="/comptes/create">Ajouter un compte</a></h2>
    @endif
    <ul>
        @each('comptes.one', $comptes, 'compte')
    </ul>
@endsection