@extends('layouts.app')

@section('content')
    <h1>Nouveau retraité</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('retraites.update', $retraite) }}" method="POST">
                @method('PUT')
                <x-form.retraite :retraite="$retraite" :emsList="$emsList"/>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection