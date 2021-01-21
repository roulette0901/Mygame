<form action="/persos/{{ $perso->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $perso->name }}">
   
    <select name="metier" id="metier" multiple>
        @foreach($metiers as $metier)
           @if ($perso->metier && $metier->id == $perso->metier->id)
               <option value="{{ $metier->id }}" selected>{{ $metier->name }}</option>
           @else
               <option value="{{ $metier->id }}">{{ $metier->name }}</option>
           @endif
        @endforeach
    </select>
    <input type="submit">
    <button><a href="/persos">Annuler</a></button>
</form>