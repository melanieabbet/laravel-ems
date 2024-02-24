@extends('layouts.app')

@section('content')
<h1 class="display-1 text-primary"><strong>Nouveau retraité</strong></h1>
    <div class="row align-items-center">
        <div class="col">
            <div class="bg-dark rounded text-light text-center py-5 my-5" style="font-size:10rem;"><i class="bi bi-person-gear"></i></div>
        </div>
        <div class="col">
            <form action="{{ route('retraites.update', $retraite) }}" method="POST">
                @method('PUT')
                <x-form.retraite :retraite="$retraite" :emsList="$emsList"/>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection