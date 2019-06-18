<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::creating(function($category){
            $category->slug = str_slug($category->name);
        });
    }

    public function parent_category()
    {
        return $this->belongsTo(Category::class);
    }

    public function child_category()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
