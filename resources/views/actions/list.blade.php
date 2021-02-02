@extends('layouts.default')

@section('title')
    Action
@endsection

@section('wrapper')
    <h1>Liste des actions</h1>
    @if (Auth::user())
    <ul>
        @each( $action, 'action')
    </ul>
    @endif

@endsection