@extends('layouts.app')

@section('content')
    <h1>Nouveau retraité</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('retraites.store') }}" method="POST">
                @method('POST')
                <x-form.retraite :retraite="$retraite" :emsList="$emsList"/>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection