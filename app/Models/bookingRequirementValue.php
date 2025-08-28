<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookingRequirementValue extends Model
{
    protected $guarded = ['id'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function requirement()
    {
        return $this->belongsTo(RoomRequirement::class, 'room_requirement_id');
    }
}
