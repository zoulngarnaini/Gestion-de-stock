<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable =[
        'stock_id',
        'user_id',
        'prix_vente',
        'quantite_vendu',
        'nom_client',
        'description'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
