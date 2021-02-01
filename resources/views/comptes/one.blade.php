<br>
<h1>{{$compte->name}} </h1>
<p>{{$compte->serveur->name}}</p>

@if (Auth::user())
<form action="/comptes/{{ $compte->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
    <a  role="button" href="/comptes/{{ $compte->id }}/edit">Modifier</a>
</form>
@endif