<?php

namespace App\Models;
use App\Filters\ProductFilter;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

}

class Product extends Model
{
    public function scopeFilter(Builder $builder, $request)
    {
        return (new ProductFilter($request))->filter($builder);
    }
}
