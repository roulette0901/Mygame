<form action="/serveurs/{{ $serveur->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $serveur->name }}">
    
    <select name="comptes[]" id="comptes" multiple>
        @foreach($comptes as $compte)
           @if ($serveur->comptes->contains('id', $compte->id))
           <option value="{{ $compte->id }}" selected>{{ $compte->name }}</option>
           @else
            <option value="{{ $compte->id }}">{{ $compte->name }}</option>
            @endif
        @endforeach
    </select>
    <input type="submit">
</form>