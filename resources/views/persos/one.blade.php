<h1>{{ $perso->name }}</h1>
<p>{{ $perso->metier->name }}</p>
{{--<p>{{ $perso->zone->name }}</p>--}}
{{--<p>{{ $perso->zone->id }}</p>--}}
<form action="/persos/{{ $perso->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>