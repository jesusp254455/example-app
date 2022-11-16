<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_products extends Model
{
    use HasFactory;

    protected $table_products = [
        'PRO_NOMBRE',
        'PRO_DESCRIPCION',
        'PRO_PRECIO',  
        
    ];
}
