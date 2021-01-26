<h1>{{ $compte->name }}</h1>
<p>{{ $compte->serveur->name }}</p>
{{--<p>{{ $compte->zone->name }}</p>--}}
{{--<p>{{ $compte->zone->id }}</p>--}}
<form action="/comptes/{{ $compte->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>