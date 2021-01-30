<h1>{{ $compte->name }}</h1>

<h2>perso:</h2>
@foreach($compte->perso as $perso) 
    {{ $perso->name }} 
@endforeach

<form action="/comptes/{{ $compte->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>