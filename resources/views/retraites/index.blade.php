@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-4">
            <h1>Liste des retraités</h1>
        </div>
        <div class="col-4 text-end">
            <a class="btn btn-primary" href="{{ route('retraites.create') }}" role="button">Nouveau patient</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($retraites as $retraite)
            <tr>
                <th scope="row">{{ $retraite->id }}</th>
                <td>{{ $retraite->nom }}</td>
                <td>{{ $retraite->prenom }}</td>
                <td>{{ $retraite->note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection