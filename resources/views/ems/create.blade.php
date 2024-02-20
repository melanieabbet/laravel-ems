@extends('layouts.app')

@section('content')
    <h1>Modifier l'Ems</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('ems.store') }}" method="POST">
                @method('POST')
                <x-form.ems :ems="$ems"/>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection