<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vente extends Model
{
    protected $fillable = [
        'ID_client', 'ID_vehicule', 'date_vente', 'prix_vente',
        'mode_paiement', 'ID_employe', 'commission_employe'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'ID_client');
    }

    public function vehicule(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class, 'ID_vehicule');
    }

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class, 'ID_employe');
    }
}