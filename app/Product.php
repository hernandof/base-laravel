<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeActive($query) {
    	return $query->whereActive(true);
    }

    public function scopeInStock($query) {
    	return $query->where('stock', '>', 0);
    }
}
