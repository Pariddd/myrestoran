<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Item extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image', 'is_active', 'category_id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
