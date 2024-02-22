@extends('layouts.app')

@section('content')
    <div class="row justify-content-between align-items-end mb-5">
        <div class="col-6">
            <h1 class="display-1 text-primary"><strong>Liste des retraités</strong></h1>
        </div>
        <div class="col-4 text-end">
            <a class="btn btn-primary" href="{{ route('retraites.create') }}" role="button">Ajouter un retraité</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Note</th>
                <th scope="col">Etablisement</th>
                <th></th>
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
                <td class="d-flex gap-3 justify-content-end">
                    <a href="{{ route('retraites.edit', $retraite->id) }}" class="btn btn-sm btn-success" role="button"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('retraites.destroy', $retraite->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce retraité?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection