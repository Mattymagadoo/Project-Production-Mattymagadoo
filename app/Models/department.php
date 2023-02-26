<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $fillable = [
        'dept_name',
        'description',
        'price',
        'type'

    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
