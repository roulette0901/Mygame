<h1>{{ $compte->name }}</h1>
<p>{{ $compte->serveur->name }}</p>
<h2>perso:</h2>
@foreach($Compte->perso as $perso) 
    {{ $perso->name }} -
@endforeach

<form action="/comptes/{{ $compte->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>