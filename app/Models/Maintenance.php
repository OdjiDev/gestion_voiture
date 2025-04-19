<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Maintenance extends Model
{
    protected $fillable = [
        'ID_vehicule', 'date_debut', 'date_fin', 
        'cout', 'type', 'description', 
        'ID_employe', 'fournisseur'
    ];

    public function vehicule(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class, 'ID_vehicule');
    }

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class, 'ID_employe');
    }
}