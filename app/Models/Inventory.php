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

}
