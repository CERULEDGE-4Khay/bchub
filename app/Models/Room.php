<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    protected $guarded = ['id'];

    public function inventories()
    {
        return $this->belongsToMany(Inventory::class, 'inventory_room')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    
    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }

    public function inventoryItems()
    {
        return $this->belongsToMany(InventoryItem::class, 'inventory_room');
    }

    public function requirements()
    {
        return $this->hasMany(RoomRequirement::class);
    }
}
