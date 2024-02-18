@extends('layouts.app')

@section('content')
<div>
    <h1 class="display-1"><strong>{{ $ems->societe }}</strong></h1>
    <h2>Adresse</h2>
    <p>{{ $ems->adresse }}</p>
    <h2>Numéro de téléphone</h2>
    <p>{{ $ems->numero_telephone }}</p>
</div>
@endsection