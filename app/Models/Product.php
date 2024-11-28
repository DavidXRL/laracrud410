<?php

namespace App\Models;

use App\Http\Controllers\BrandController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    // transmite los datos de acuerdo al nombe de cada campo de la base

    protected $fillable = [
        'name_product',
        'brand_id',
        'stock',
        'unit_price',
        'imagen'
    ];

    // tenemos que hacer una conjunción para que en vez de llamar el número del id nos mande a llamar a lo que quisieramos
    // después del function va el nombre de la función
    public function brand():BelongsTo //belong es una importanción de las relaciones con el eloquent
    {
        return $this->belongsTo(Brand::class, 'brand_id');  //se conecta a la tabla productos con la tabla marca a través del ID
    }
}
