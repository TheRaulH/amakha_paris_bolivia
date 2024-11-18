<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id'];

    // Relación con los productos
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relación con la categoría principal
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}