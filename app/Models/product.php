<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch'
    ];

    public function template()
    {
        return $this->belongsTo(productTemplate::class);
    }


}
