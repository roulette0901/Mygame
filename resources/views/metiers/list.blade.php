@extends('layouts.default')

@section('title')
    Animals
@endsection

@section('wrapper')
    <h1>Liste des Comptes</h1>
    <h2><a href="/comptes/create">Ajouter un compte</a></h2>
    <ul>
        @each('comptes.one', $comptes, 'compte')
    </ul>
@endsection