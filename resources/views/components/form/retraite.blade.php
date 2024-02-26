@csrf
<div class="mb-3">
    <input type="hidden" name="id" value="{{ $retraite->id }}">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom',$retraite->prenom) }}">
    @if($errors->has('prenom'))
        <div class="text-danger">{{ $errors->first('prenom') }}</div>
    @endif                    
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom',$retraite->nom) }}">
    @if($errors->has('nom'))
        <div class="text-danger">{{ $errors->first('nom') }}</div>
    @endif 
    <label for="date_de_naissance" class="form-label">Date de naissance</label>
    <input type="text" class="form-control" id="date_de_naissance" name="date_de_naissance" placeholder="YYYY-MM-DD" value="{{ old('date_de_naissance',$retraite->date_de_naissance) }}">
    @if($errors->has('date_de_naissance'))
        <div class="text-danger">{{ $errors->first('date_de_naissance') }}</div>
    @endif 
    <label for="note" class="form-label">Note</label>
    <textarea class="form-control" id="note" name="note" value="{{ old('note',$retraite->note) }}"></textarea>
    @if($errors->has('note'))
        <div class="text-danger">{{ $errors->first('note') }}</div>
    @endif 
    <label for="ems_id" class="form-label">Ems</label>
    <select name="ems_id" id="ems_id" class="form-select">
        @foreach($emsList as $ems)
            <option value="{{ $ems->id }}" {{ $ems_id = $ems->id ? 'selected' : '' }}>{{ $ems->societe }}</option>
        @endforeach
    </select>
</div>
