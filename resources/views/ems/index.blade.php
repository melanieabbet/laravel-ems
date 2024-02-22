@extends('layouts.app')

@section('content')
    <div class="row justify-content-between align-items-end mb-5">
        <div class="col-6">
            <h1 class="display-1 text-primary"><strong>Liste des Ems</strong></h1>
        </div>
        <div class="col-4 text-end">
            <a class="btn btn-primary" href="{{ route('ems.create') }}" role="button">Nouvel établissement</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Société</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Nombre de retraités</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ems as $ems)
            <tr>
                <th scope="row">{{ $ems->id }}</th>
                <td>{{ $ems->societe }}</td>
                <td>{{ $ems->adresse }}</td>
                <td>{{ $ems->numero_telephone }}</td>
                <td>{{ $ems->numberOfRetraites() }} {{ Str::plural('retraité', $ems->numberOfRetraites()) }}</td>
                <td class="d-flex gap-3 justify-content-end">
                    <a href="{{ route('ems.show', $ems->id) }}" class="btn btn-sm btn-secondary" role="button"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('ems.edit', $ems->id) }}" class="btn btn-sm btn-success" role="button"><i class="bi bi-pencil"></i></a>
                    @if ($ems->isDeletable())
                        <form action="{{ route('ems.destroy', $ems->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet Ems?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    @else
                        <button type="button" class="btn btn-sm btn-danger" disabled><i class="bi bi-trash3"></i></button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection