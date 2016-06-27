<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'body', 'image', 'stock', 'price', 'active'
    ];

    public function scopeActive($query) {
    	return $query->whereActive(true);
    }

    public function scopeInStock($query) {
    	return $query->where('stock', '>', 0);
    }
}
