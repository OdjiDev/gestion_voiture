<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Client extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'adresse', 'email', 'telephone',
        'date_inscription', 'type', 'numero_permis'
    ];

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class, 'ID_client');
    }

    public function ventes(): HasMany
    {
        return $this->hasMany(Vente::class, 'ID_client');
    }
}
