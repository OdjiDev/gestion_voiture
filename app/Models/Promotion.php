<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotion extends Model
{
    protected $fillable = [
        'code_promo', 'reduction',
        'date_debut', 'date_fin',
        'ID_categorie'
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'ID_categorie');
    }
}
