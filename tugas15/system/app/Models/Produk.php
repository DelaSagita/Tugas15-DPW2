<?php

namespace App\Models;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model{

    use ProdukAttributes, ProdukRelations;
    use HasFactory;
    protected $table = "produk";
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'berat' => 'decimal:2'
    ];
    
   
}
