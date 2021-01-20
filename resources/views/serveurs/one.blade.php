<h1>{{$Serveur->name}}</h1>
@foreach($Serveur->comptes as $compte) 
    <h5>{{ $compte->name }}</h5>
@endforeach

<form action="/serveurs/{{ $Serveur->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>