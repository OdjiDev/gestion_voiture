<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agence extends Model
{
    protected $fillable = ['nom', 'adresse', 'telephone', 'email', 'heures_ouverture'];

    public function vehicules(): HasMany
    {
        return $this->hasMany(Vehicule::class, 'ID_agence');
    }

    public function employes(): HasMany
    {
        return $this->hasMany(Employe::class, 'ID_agence');
    }
}