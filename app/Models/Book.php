<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'author', 'description', 'price', 'quantity','publisher','image','discount_rate','category_id',
        'category_name','is_upcoming','release_date'
    ];
    public function scopeUpcoming($query)
    {
        return $query->where('is_upcoming', true);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    protected $appends = ['discount_price'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function getDiscountPriceAttribute()
    {
        $discountAmount = $this->price * ($this->discount_rate / 100); 
        return $this->price - $discountAmount; 
    }
    public function getDiscountAmountAttribute()
    {
        return $this->price * ($this->discount_rate / 100); 
    }
}
