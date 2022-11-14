<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'title',
        'image',
        'direction',
        'is_published',
        'user_id',
    ];

    function user() 
    {
        return $this->belongsTo(User::class);
    }

    function categories() 
    {
        return $this->belongsToMany(Category::class);
    }

}
