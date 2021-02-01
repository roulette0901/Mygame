<h1>{{$metier->name}}</h1>


@if (Auth::user())
<form action="/metiers/{{ $metier->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
    <a  role="button" href="/metiers/{{ $metier->id }}/edit">Modifier</a>
</form>
@endif