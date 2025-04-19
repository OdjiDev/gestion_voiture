<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    protected $fillable = [
        'ID_client', 'ID_vehicule', 'date_debut', 'date_fin',
        'prix_total', 'caution', 'statut', 'penalites'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'ID_client');
    }

    public function vehicule(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class, 'ID_vehicule');
    }

    public function assurance(): HasOne
    {
        return $this->hasOne(Assurance::class, 'ID_location');
    }
}