@extends('layouts.app')

@section('content')
<h2 class="text-center mb-2">Liste des notes</h2>
<div class="d-flex justify-content-center mb-3">
    <form method="GET" action="{{ route('resultat') }}" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Rechercher..." value="{{ $search ?? '' }}">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form>
</div>
<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>Nom</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eleves as $eleve)
        <tr>
            <td>{{ $eleve->nom }}</td>
            <td>{{ $eleve->note }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
