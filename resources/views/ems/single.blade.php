@extends('layouts.app')

@section('content')
<div>
    <h1 class="display-1 text-primary"><strong>{{ $ems->societe }}</strong></h1>
    <div class="row align-items-center">
        <div class="col">
            <div class="bg-dark rounded text-light text-center py-5 my-5" style="font-size:10rem;"><i class="bi bi-house"></i></div>
        </div>
        <div class="col">
            <h2 class="text-primary">Adresse</h2>
            <p class="bg-white p-2">{{ $ems->adresse }}</p>
            <h2  class="text-primary">Numéro de téléphone</h2>
            <p class="bg-white p-2">{{ $ems->numero_telephone }}</p>
        </div>
    </div>
</div>
@endsection