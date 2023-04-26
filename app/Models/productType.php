<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productType extends Model
{
    use HasFactory;
    protected $fillable = [
        'productType'
    ];

    public function templates()
    {
        return $this->hasMany(productTemplate::class);
    }
}
