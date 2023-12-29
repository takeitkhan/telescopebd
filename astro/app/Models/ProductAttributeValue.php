<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    use HasFactory;
    protected $table = 'product_attribute_values';
    protected $fillable = [
        'attributes_id',
        'value',
    ];
}