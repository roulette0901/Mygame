<h1>{{ $action->name }}</h1>


@if (Auth::user())
<form action="/actions/{{ $action->id }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
    <a  role="button" href="/persos/{{ $action->id }}/edit">Modifier</a>
    
</form>
@endif