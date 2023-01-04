<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function type()
    {
        return $this->belongsTo(type::class);
    }
}
