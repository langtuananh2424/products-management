<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
