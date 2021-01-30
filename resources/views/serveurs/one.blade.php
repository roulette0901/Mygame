<h1>{{$Serveur->name}}</h1>


<form action="/serveurs/{{ $Serveur->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>