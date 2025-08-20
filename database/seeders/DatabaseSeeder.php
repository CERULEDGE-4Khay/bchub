<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = \App\Models\User::factory()->count(3)->create();

        $rooms = \App\Models\Room::insert([
            ['name' => 'Studio Musik Basement', 'description' => 'Studio musik pertama di Bandung', 'capacity' => 8],
            ['name' => 'Studio Tari Lantai 2', 'description' => 'Ruang tari luas untuk 20 orang', 'capacity' => 20],
            ['name' => 'Studio Teater', 'description' => 'Ruang teater mini untuk latihan drama', 'capacity' => 15],
        ]);

        $rooms = \App\Models\Room::all();

        \App\Models\Inventory::insert([
            [
                'name' => 'Drum Set',
                'brand' => 'fender',
                'serial_number' => 'asdasd',
                'condition' => 'good',
                'status' => 'available'
            ],
            [
                'name' => 'Gitar Elektrik',
                'brand' => 'fender',
                'serial_number' => 'asdasd',
                'condition' => 'good',
                'status' => 'available'
            ],
            [
                'name' => 'Keyboard',
                'brand' => 'fender',
                'serial_number' => 'asdasd',
                'condition' => 'good',
                'status' => 'available'
            ],
            [
                'name' => 'Amplifier',
                'brand' => 'BlackStar',
                'serial_number' => 'asdasd',
                'condition' => 'good',
                'status' => 'available'
            ],
        ]);

        // Ambil data setelah insert
        $room1 = \App\Models\Room::where('name', 'Studio Musik Basement')->first();
        $room2 = \App\Models\Room::where('name', 'Studio Tari Lantai 2')->first();

        $drum   = \App\Models\Inventory::where('name', 'Drum Set')->first();
        $guitar = \App\Models\Inventory::where('name', 'Gitar Elektrik')->first();
        $amp    = \App\Models\Inventory::where('name', 'Amplifier')->first();

        // Hubungkan Room dengan Inventory lewat pivot
        $room1->inventories()->attach($drum->id, ['quantity' => 1]);
        $room1->inventories()->attach($guitar->id, ['quantity' => 2]);
        $room1->inventories()->attach($amp->id, ['quantity' => 1]);

        $room2->inventories()->attach($guitar->id, ['quantity' => 5]);

        \App\Models\Booking::create([
            'user_id'    => $users[0]->id,
            'room_id'    => $rooms[0]->id,
            'start_time' => now()->addDay()->setTime(9, 0),
            'end_time'   => now()->addDay()->setTime(11, 0),
            'status'     => 'approved',
        ]);

        \App\Models\Booking::create([
            'user_id'    => $users[1]->id,
            'room_id'    => $rooms[1]->id,
            'start_time' => now()->addDay()->setTime(13, 0),
            'end_time'   => now()->addDay()->setTime(15, 0),
            'status'     => 'pending',
        ]);
    }
}
