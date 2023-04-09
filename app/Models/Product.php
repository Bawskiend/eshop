<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;

    public function section()
    {
        return getProductRoute($this->belongsTo(Section::class));
    }
    public function getProductRoute($products){
        foreach ($products as &$product) {
            $product->slug = $product->section->slug . '/' . $product->slug;
        }
        return $products;
    }
}
