<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\InventoryItem;
use App\Models\Room;
use Carbon\Carbon;
use App\Models\RoomRequirement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Role::insert([
            ['name' => 'user'],
            ['name' => 'admin']
        ]);

        \App\Models\User::create([
            'name' => 'updt',
            'email' => 'updt@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2
        ]);
        \App\Models\User::create([
            'name' => 'bch',
            'email' => 'bch@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);

        $inventories = [
            // ================= Studio Fesyen =================
            'Kursi' => [
                ['brand' => 'IKEA', 'qty' => 1],
            ],
            'Meja Panjang' => [
                ['brand' => 'Informa', 'qty' => 1],
            ],
            'Microphone' => [
                ['brand' => 'Shure', 'qty' => 1],
                ['brand' => 'Lewitt', 'qty' => 1], // buat Studio Musik
            ],
            'Speaker' => [
                ['brand' => 'RCF', 'qty' => 1],
                ['brand' => 'JBL EON615', 'qty' => 1],
            ],
            'Mixer' => [
                ['brand' => 'Primatech', 'qty' => 1],
                ['brand' => 'Yamaha MG16XU', 'qty' => 1],
            ],

            // ================= Studio Musik =================
            'Gitar Listrik' => [
                ['brand' => 'Yamaha', 'qty' => 1],
                ['brand' => 'Squier', 'qty' => 1],
            ],
            'Bass Listrik' => [
                ['brand' => 'Squier', 'qty' => 1],
                ['brand' => 'Fender Rumble', 'qty' => 1],
            ],
            'Gitar Akustik Elektrik' => [
                ['brand' => 'Takamine ED3NC', 'qty' => 1],
            ],
            'Drum Set' => [
                ['brand' => 'Gretsch', 'qty' => 1],
            ],
            'Piano Digital' => [
                ['brand' => 'Yamaha', 'qty' => 1],
            ],
            'Amplifier' => [
                ['brand' => 'Blackstar ID40', 'qty' => 1],
                ['brand' => 'Roland JC', 'qty' => 1],
            ],

            // ================= Komputer & Design =================
            'CPU' => [
                ['brand' => 'HP Z440', 'qty' => 2],
                ['brand' => 'HP Z640', 'qty' => 6],
                ['brand' => 'Axioo', 'qty' => 4],
            ],
            'Monitor' => [
                ['brand' => 'HP Z27n', 'qty' => 3],
                ['brand' => 'HP N240', 'qty' => 5],
                ['brand' => 'Axioo', 'qty' => 4],
            ],
            'Headset' => [
                ['brand' => 'Logitech', 'qty' => 5],
            ],
            'Tablet Gambar' => [
                ['brand' => 'Wacom Intuos Art', 'qty' => 4],
            ],
            'Software Design/Editing' => [
                ['brand' => 'Adobe', 'qty' => 1],
                ['brand' => 'Figma', 'qty' => 1],
                ['brand' => 'Davinci Resolve', 'qty' => 1],
                ['brand' => 'Sony Vegas', 'qty' => 1],
            ],
            'Software Animasi/3D/Rendering' => [
                ['brand' => 'Blender', 'qty' => 1],
                ['brand' => 'Cinema 4D', 'qty' => 1],
                ['brand' => 'Unreal Engine 5', 'qty' => 1],
                ['brand' => 'Houdini', 'qty' => 1],
                ['brand' => 'Marvelous Designer', 'qty' => 1],
                ['brand' => 'Toon Boom Harmony', 'qty' => 1],
                ['brand' => 'Zbrush', 'qty' => 1],
            ],
        ];

        foreach ($inventories as $invName => $items) {
            $inv = Inventory::create([
                'name' => $invName,
                'quantity' => collect($items)->sum('qty'),
            ]);

            foreach ($items as $item) {
                for ($i = 1; $i <= $item['qty']; $i++) {
                    InventoryItem::create([
                        'inventory_id' => $inv->id,
                        'brand' => $item['brand'],
                        'serial_number' => strtoupper(substr($item['brand'], 0, 3)) . '-' . uniqid(),
                        'condition' => 'good',
                        'status' => 'available',
                    ]);
                }
            }
        }

        $rooms = [
    [
        'name' => 'Studio Animasi & Editing',
        'floor' => 'Lt.4',
        'capacity' => 10,
        'description' => 'Studio Animasi dan Editing berada di dekat taman lantai 4. Studio ini memiliki berfungsi untuk penciptaan animasi, desain grafis, serta editing video. Aktivitas di studio ini telah sepaket dengan perangkat Komputer, Wacom Pen Tablets, serta headset. Cocok untuk: Membuat Animasi, Desain Grafis, Rendering, dan Editing Video.',
        'facilities' => [
            'CPU HP Z440' => 2,
            'CPU HP Z640' => 6,
            'CPU Axioo' => 4,
            'Monitor HP Z27n' => 3,
            'Monitor HP N240' => 5,
            'Monitor Axioo' => 4,
            'Headset Logitech' => 5,
            'Wacom Intuos Art' => 4,
            'Software Design/Editing' => 1,
        ],
        'requirements' => [
            ['Cek ketersediaan jadwal', 'linktr.ee/creativehub_bdg', 'text'],
            ['Hubungi hotline', 'Jam 08.00–16.30 WIB', 'text'],
            ['Mengisi Surat Pernyataan', 'Diserahkan ke Front Office', 'file'],
            ['Simpan KTP di Front Office', 'Selama sesi berlangsung', 'text'],
            ['Deskripsi kegiatan', 'Harus dilampirkan', 'textarea'],
            ['Maksimal sesi', '2 sesi/hari: 09.00–12.00 & 13.00–16.00', 'text'],
        ],
    ],
    // Studio Musik
    [
        'name' => 'Studio Musik',
        'floor' => 'Basement',
        'capacity' => 8,
        'description' => 'Studio musik yang terletak di lantai dasar ini, merupakan studio musik gratis pertama di Bandung. Fasilitas yang tersedia sesuai standar studio musik pada umumnya dengan gitar listrik, gitar akustik, bass listrik, keyboard, drum, dan perangkat amplifier. Cocok untuk: Latihan Musik, Instrumental, Duo, dan Band.',
        'facilities' => [
            'Microphone Lewitt' => 1,
            'Electric Guitar Yamaha' => 1,
            'Electric Guitar Squier' => 1,
            'Electric Bass Squier' => 1,
            'Acoustic Electric Guitar Takamine ED3NC' => 1,
            'Drum Set Gretsch' => 1,
            'Digital Piano Yamaha' => 1,
            'Analog Mixer Yamaha MG16XU' => 1,
            'Amplifier Blackstar ID40' => 1,
            'Amplifier Rolland JC' => 1,
            'Amplifier Bass Fender Rumble' => 1,
            'Speaker JBL EON615' => 1,
        ],
        'requirements' => [
            ['Cek jadwal', 'linktr.ee/creativehub_bdg', 'text'],
            ['Hubungi hotline', 'Jam 08.00–16.30 WIB', 'text'],
            ['Mengisi Surat Pernyataan', 'Diserahkan ke Front Office', 'file'],
            ['Simpan KTP di Front Office', 'Selama sesi berlangsung', 'text'],
            ['Lampiran nama personil', 'Harus dilampirkan', 'textarea'],
            ['Maksimal sesi', '1 sesi/hari: 09.00–11.00, 11.00–13.00, 13.00–15.00', 'text'],
        ],
    ],
    // Studio Fesyen
    [
        'name' => 'Studio Fesyen',
        'floor' => 'Lt.5',
        'capacity' => 30,
        'description' => 'Studio yang terletak di lantai 5 ini merupakan ruang khusus aktivitas fesyen. Berbagai aktivitas berkaitan fesyen seperti modeling class, makeup class, mini catwalk, serta workshop fashion bisa diselenggarakan di studio ini. Cocok untuk: Modeling Class, MakeUp Class, Mini Catwalk, dan Workshop.',
        'facilities' => [
            'Kursi' => 30,
            'Meja Panjang' => 1,
            'Microphone' => 1,
            'Speaker RCF' => 1,
            'Mixer Primatech' => 1,
        ],
        'requirements' => [
            ['Cek jadwal', 'linktr.ee/creativehub_bdg', 'text'],
            ['Konfirmasi hotline', 'Jam 08.00–16.00 WIB', 'text'],
            ['Membuat Surat Pengajuan', 'Tema, rundown, jumlah peserta, waktu pelaksanaan', 'file'],
            ['Simpan KTP di Operator', 'Selama acara berlangsung', 'text'],
            ['Lampiran alat dibawa', 'Jika ada', 'textarea'],
            ['Jam operasional', '08.00–21.00 WIB (libur nasional tutup)', 'text'],
        ],
    ],
];



foreach ($rooms as $roomData) {
    $room = Room::create([
        'name'        => $roomData['name'],
        'floor'       => $roomData['floor'],
        'capacity'    => $roomData['capacity'],
        'description' => $roomData['description'],
    ]);

    // Insert fasilitas
    foreach ($roomData['facilities'] as $nama => $jumlah) {
        // cari atau buat inventory (kategori barang)
        $inv = Inventory::firstOrCreate(['name' => $nama]);

        // bikin item (detail barang) sesuai jumlah
        for ($i = 1; $i <= $jumlah; $i++) {
            $item = InventoryItem::create([
                'inventory_id'  => $inv->id,
                'brand'         => null,
                'serial_number' => null,
                'condition'     => 'good',
                'status'        => 'available',
            ]);

            // attach ke room via inventory_item_id
            DB::table('inventory_room')->insert([
                'room_id'           => $room->id,
                'inventory_item_id' => $item->id,
                'quantity'          => 1, // karena 1 per item
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }

    // Insert requirements
    foreach ($roomData['requirements'] as [$label, $desc, $type]) {
        RoomRequirement::create([
            'room_id'     => $room->id,
            'label'       => $label,
            'description' => $desc,
            'type'        => $type,
            'is_required' => true,
        ]);
    }
}
 // Seeder untuk tabel articles
        DB::table('articles')->insert([
            [
                'title' => 'Belajar Laravel Dasar',
                'author' => 'Admin',
                'published_at' => Carbon::now()->subDays(5),
                'description' => 'Artikel ini membahas dasar-dasar Laravel untuk pemula.',
                'image' => 'images/articles/laravel.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Membuat API dengan Laravel',
                'author' => 'Khairan',
                'published_at' => Carbon::now()->subDays(2),
                'description' => 'Panduan membuat REST API menggunakan Laravel.',
                'image' => 'images/articles/api.jpg',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seeder untuk tabel beritas
        DB::table('beritas')->insert([
            [
                'title' => 'Festival Musik Bandung 2025',
                'author' => 'Redaksi',
                'published_at' => Carbon::now()->subDays(3),
                'description' => 'Festival musik terbesar di Bandung resmi digelar tahun ini.',
                'image' => 'images/berita/festival.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pameran Seni Rupa Nasional',
                'author' => 'Jurnalis',
                'published_at' => Carbon::now()->subDay(),
                'description' => 'Pameran seni rupa menghadirkan karya dari seniman seluruh Indonesia.',
                'image' => 'images/berita/seni.jpg',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
