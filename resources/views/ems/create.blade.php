@extends('layouts.app')

@section('content')
    <h1 class="display-1 text-primary"><strong>Nouvel Ems</strong></h1>
    <div class="row align-items-center">
        <div class="col">
            <div class="bg-dark rounded text-light text-center py-5 my-5" style="font-size:10rem;"><i class="bi bi-house-add"></i></div>
        </div>
        <div class="col">
            <form class="mx-4" action="{{ route('ems.store') }}" method="POST">
                @method('POST')
                <x-form.ems :ems="$ems"/>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection