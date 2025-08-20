<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];

    public function inventories()
    {
        return $this->belongsToMany(Inventory::class, 'inventory_room')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
