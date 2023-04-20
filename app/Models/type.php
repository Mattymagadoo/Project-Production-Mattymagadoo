<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $fillable = [
        'type'
    ];

    public function templates()
    {
        return $this->hasMany(productTemplate::class);
    }
}
