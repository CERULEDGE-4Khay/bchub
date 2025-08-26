<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = ['id'];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'inventory_room')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    // Accessor stok tersedia
    public function getAvailableStockAttribute()
    {
        $used = $this->rooms()->sum('inventory_room.quantity');
        return $this->quantity - $used;
    }

    public function items()
    {
        return $this->hasMany(InventoryItem::class, 'inventory_id');
    }
}
