@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-4">
            <h1 class="display-1 text-primary">Liste des retraités</h1>
        </div>
        <div class="col-4 text-end">
            <a class="btn btn-primary" href="{{ route('retraites.create') }}" role="button">Nouveau patient</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Note</th>
                <th scope="col">Etablisement</th>
            </tr>
        </thead>
        <tbody>
            @foreach($retraites as $retraite)
            <tr>
                <th scope="row">{{ $retraite->id }}</th>
                <td>{{ $retraite->nom }}</td>
                <td>{{ $retraite->prenom }}</td>
                <td>{{ $retraite->note }}</td>
                <td><a href="{{ route('ems.show', ['id' =>  $retraite->ems->id]) }}">{{ $retraite->ems->societe }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection