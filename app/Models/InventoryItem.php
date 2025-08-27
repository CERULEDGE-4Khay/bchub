<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = [
        'inventory_id',
        'brand',
        'serial_number',
        'condition',
        'status',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'inventory_room');
    }
}
