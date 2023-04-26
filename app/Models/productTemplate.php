<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

    public function products()
    {
        return $this->hasMany(product::class);
    }

    public function type()
    {
        return $this->belongsTo(productType::class);
    }
}
