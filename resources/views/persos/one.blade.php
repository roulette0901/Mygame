<h1>{{ $perso->name }}</h1>
<p>{{$perso->metier->name}}</p>

@if (Auth::user())
<form action="/persos/{{ $perso->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
    <a  role="button" href="/persos/{{ $perso->id }}/edit">Modifier</a>
    
</form>
@endif