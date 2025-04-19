@extends('layouts.app')

@section('title', 'Modifier la voiture')

{{-- @section('content') --}}

<section id="edit-voiture">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modification de la voiture</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('voitures.edit', $voiture->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="marque">Marque</label>
                                    <input type="text" name="marque" class="form-control" value="{{ old('marque', $voiture->marque) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modele">Modèle</label>
                                    <input type="text" name="modele" class="form-control" value="{{ old('modele', $voiture->modele) }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="annee">Année</label>
                                    <input type="number" name="annee" class="form-control" value="{{ old('annee', $voiture->annee) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="couleur">Couleur</label>
                                    <input type="text" name="couleur" class="form-control" value="{{ old('couleur', $voiture->couleur) }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prix">Prix</label>
                                    <input type="number" name="prix" step="0.01" class="form-control" value="{{ old('prix', $voiture->prix) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="immatriculation">Immatriculation</label>
                                    <input type="text" name="immatriculation" class="form-control" value="{{ old('immatriculation', $voiture->immatriculation) }}" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Mettre à jour</button>
                        <a href="{{ route('voitures.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @endsection --}}
