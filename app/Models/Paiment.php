<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiment extends Model
{
    protected $fillable = [
        'ID_location', 'ID_vente', 'montant',
        'date_paiement', 'methode', 'statut',
        'reference_transaction'
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'ID_location');
    }

    public function vente(): BelongsTo
    {
        return $this->belongsTo(Vente::class, 'ID_vente');
    }
}