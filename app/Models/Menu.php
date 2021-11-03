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
        return $this->belongsToMany('App\Transaction', 'TransactionDetail')
            ->withPivot('quantity');
    }

    public function carts()
    {
        return $this->belongsToMany('App\Cart', 'CartItem')
            ->withPivot('quantity');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
