<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'description', 'price', 'image', 'active'];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::menu, 'transaction_details')
            ->withPivot('quantity');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_items')
            ->withPivot('quantity');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
