<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicule extends Model
{
    protected $fillable = [
        'marque', 'modele', 'annee', 'immatriculation', 'couleur',
        'prix_achat', 'prix_vente', 'statut', 'type_carburant',
        'boite_vitesse', 'nombre_places', 'climatisation',
        'ID_categorie', 'ID_agence'
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'ID_categorie');
    }

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class, 'ID_agence');
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class, 'ID_vehicule');
    }

    public function ventes(): HasMany
    {
        return $this->hasMany(Vente::class, 'ID_vehicule');
    }

    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class, 'ID_vehicule');
    }
}
