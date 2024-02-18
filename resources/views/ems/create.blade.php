@extends('layouts.app')

@section('content')
    <h1>Nouvel Ems</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('ems.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="societe" class="form-label">Société</label>
                    <input type="text" class="form-control" id="societe" name="societe" value="{{ old('societe') }}">
                    @if($errors->has('societe'))
                        <div class="text-danger">{{ $errors->first('societe') }}</div>
                    @endif                    
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}">
                    @if($errors->has('adresse'))
                        <div class="text-danger">{{ $errors->first('adresse') }}</div>
                    @endif 
                    <label for="numero_telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="numero_telephone" name="numero_telephone" value="{{ old('numero_telephone') }}">
                    @if($errors->has('numero_telephone'))
                        <div class="text-danger">{{ $errors->first('numero_telephone') }}</div>
                    @endif                         
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection