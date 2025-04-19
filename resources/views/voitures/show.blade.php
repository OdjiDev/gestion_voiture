


@extends('layouts.app')

@section('title', 'Liste des véhicules')

@section('content')
    <section class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Liste des véhicules</h4>
                <a href="{{ route('voitures.create') }}" class="btn btn-primary float-right">Ajouter un véhicule</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Année</th>
                            <th>Couleur</th>
                            <th>Prix</th>
                            <th>Immatriculation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voitures as $voiture)
                            <tr>
                                <td>{{ $voiture->marque }}</td>
                                <td>{{ $voiture->modele }}</td>
                                <td>{{ $voiture->annee }}</td>
                                <td>{{ $voiture->couleur }}</td>
                                <td>{{ $voiture->prix }}</td>
                                <td>{{ $voiture->immatriculation }}</td>
                                <td>
                                    <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    
                                    <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce véhicule ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $voitures->links() }}
            </div>
        </div>
    </section>
@endsection
