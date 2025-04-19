<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TarifLocation extends Model
{
    protected $fillable = [
        'ID_categorie', 'prix_jour', 
        'prix_semaine', 'prix_mois'
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'ID_categorie');
    }
}