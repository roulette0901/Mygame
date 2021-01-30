<h1>{{ $perso->name }}</h1>
@foreach($perso->compte as $compte) 
    <h5>{{ $compte->name }} </h5>
@endforeach

<form action="/persos/{{ $perso->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>
