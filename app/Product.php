<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function carts()
    {
        return $this->belongsToMany(
            Cart::class,
            'lines',
        )->withPivot(['id', 'quantity']);
    }

    public function scopeAgeBottom($query, $num)
    {
        return  $query->where('age', '>=', $num);
    }

    public function scopeAgeTop($query, $num)
    {
        return $query->where('age', '<=', $num);
    }
}
