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
    <div class="row">
        <div class="col-12">
            <div class="border rounded my-3 p-3">
                <h2 class="display-4 text-primary pb-4"><strong>Aperçu du nombre de retraité</strong></h2>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-dark"><i class="bi bi-person-fill"></i><span class="ps-2">{{ $ems->numberOfRetraites() }} {{ Str::plural('retraité', $ems->numberOfRetraites()) }}</span></h3>
                    <div class="d-flex gap-3">
                    <a class="btn btn-primary" href="{{ route('retraites.create') }}" role="button">Ajouter un retraité</a>
                    @if ($ems->numberOfRetraites() > 0)
                        <form action="{{ route('retraites.destroyAllByEms', $ems->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer tous les retraité pour cette EMS?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i> Supprimer tous les retraités</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection