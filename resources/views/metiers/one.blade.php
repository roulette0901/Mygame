<h1>{{$metier->name}}</h1>


<form action="/metiers/{{ $metier->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>