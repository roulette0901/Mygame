<form action="/comptes/{{ $compte->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $compte->name }}">
   
    <select name="serveur" id="serveur" multiple>
        @foreach($serveurs as $serveur)
           @if ($compte->serveur && $serveur->id == $compte->serveur->id)
               <option value="{{ $serveur->id }}" selected>{{ $serveur->name }}</option>
           @else
               <option value="{{ $serveur->id }}">{{ $serveur->name }}</option>
           @endif
        @endforeach
    </select>
    <select name="Persos[]" id="Persos" multiple>
        @foreach($Persos as $Perso)
           @if ($Compte->Perso && $Perso->id == $Compte->Perso->first()->id)
               <option value="{{ $Perso->id }}" selected>{{ $Perso->name }}</option>
           @else
               <option value="{{ $Perso->id }}">{{ $Perso->name }}</option>
           @endif
        @endforeach
    </select>
    <input type="submit">
    <button><a href="/comptes">Annuler</a></button>
</form>