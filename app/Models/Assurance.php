<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assurance extends Model
{
    protected $fillable = [
        'ID_location', 'type', 
        'prix_jour', 'compagnie', 
        'numero_contrat'
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'ID_location');
    }
}