<form action="/metiers/{{ $metier->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $metier->name }}">
    
    <select name="persos[]" id="persos" multiple>
        @foreach($persos as $perso)
           @if ($metier->persos->contains('id', $perso->id))
           <option value="{{ $perso->id }}" selected>{{ $perso->name }}</option>
           @else
            <option value="{{ $perso->id }}">{{ $perso->name }}</option>
            @endif
        @endforeach
    </select>
    <input type="submit">
</form>