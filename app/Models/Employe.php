<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employe extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'poste', 'email', 'telephone',
        'ID_agence', 'date_embauche', 'salaire'
    ];

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class, 'ID_agence');
    }

    public function ventes(): HasMany
    {
        return $this->hasMany(Vente::class, 'ID_employe');
    }
}