<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function proccessor()
    {
        return $this->hasOne(User::class, 'processed_by');
    }

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
