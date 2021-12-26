<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Protect Data Breach
    protected $table = "products";
    // Guarded variable on model class
    protected $fillable = ["name", "description", "price", "inStock"];
}
