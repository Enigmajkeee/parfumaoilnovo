<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogueOil extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firm',
        'quantity',
    ];
}
