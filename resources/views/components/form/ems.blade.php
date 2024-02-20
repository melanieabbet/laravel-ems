@csrf
<div class="mb-3">
    <label for="societe" class="form-label">Société</label>
   
    <input type="hidden" name="id" value="{{ $ems->id }}">
  
    <input type="text" class="form-control" id="societe" name="societe" value="{{ old('societe',$ems->societe) }}">
    @if($errors->has('societe'))
        <div class="text-danger">{{ $errors->first('societe') }}</div>
    @endif                    
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse',$ems->adresse) }}">
    @if($errors->has('adresse'))
        <div class="text-danger">{{ $errors->first('adresse') }}</div>
    @endif 
    <label for="numero_telephone" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="numero_telephone" name="numero_telephone" value="{{ old('numero_telephone',$ems->numero_telephone) }}">
    @if($errors->has('numero_telephone'))
        <div class="text-danger">{{ $errors->first('numero_telephone') }}</div>
    @endif                         
</div>
