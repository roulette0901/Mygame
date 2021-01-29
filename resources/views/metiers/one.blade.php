<h1>{{$metier->name}}</h1>
@foreach($metier->persos as $perso) 
    <h5>{{ $perso->name }}</h5>
@endforeach
    

<form action="/metiers/{{ $metier->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>