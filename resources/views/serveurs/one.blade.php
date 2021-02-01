<h1>{{$Serveur->name}}</h1>


@if (Auth::user())
<form action="/serveurs/{{ $Serveur->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
    <a role="button" href="/serveurs/{{ $Serveur->id }}/edit">Modifier</a>
</form>
@endif