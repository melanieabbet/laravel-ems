@extends('layouts.app')

@section('content')
    <h1>Modifer l'Ems</h1>
    <div class="row justify-content-between">
        <div class="col-4">
        @dump($ems->id)
            <form action="{{ route('ems.update', $ems) }}" method="POST">
                @method('PUT')
                <x-form.ems :ems="$ems"/>
               
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection