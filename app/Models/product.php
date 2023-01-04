<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'type_ID',
        'pg',
        'length',
        'pages'
        
    ];

    public function attribute()
    {
        return $this->hasOne(attribute::class);
    }


}
