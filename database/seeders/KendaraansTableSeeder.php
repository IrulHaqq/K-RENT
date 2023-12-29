<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Kendaraans')->insert([
            'user_id' => 1, 
            'Tipe_Kendaraan' => 'Car',
            'Nama_Kendaraan' => 'Toyota Camry',
            'Harga_Kendaraan' => 500000, 
            'Jumlah_Kendaraan' => 5,
            'Deskripsi_Kendaraan' => 'A comfortable sedan with great features.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Kendaraans')->insert([
            'user_id' => 2, 
            'Tipe_Kendaraan' => 'Motorcycle',
            'Nama_Kendaraan' => 'Kawasaki Ninja H2R',
            'Harga_Kendaraan' => 350000, 
            'Jumlah_Kendaraan' => 3,
            'Deskripsi_Kendaraan' => 'A sporty motorcycle with excellent performance.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Kendaraans')->insert([
            'user_id' => 1,
            'Tipe_Kendaraan' => 'SUV',
            'Nama_Kendaraan' => 'Ford Explorer',
            'Harga_Kendaraan' => 600000,
            'Jumlah_Kendaraan' => 2,
            'Deskripsi_Kendaraan' => 'A spacious and powerful SUV for family trips.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Kendaraans')->insert([
            'user_id' => 2,
            'Tipe_Kendaraan' => 'Convertible',
            'Nama_Kendaraan' => 'Mazda MX-5',
            'Harga_Kendaraan' => 750000,
            'Jumlah_Kendaraan' => 1,
            'Deskripsi_Kendaraan' => 'A stylish convertible car for a thrilling driving experience.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Kendaraans')->insert([
            'user_id' => 1,
            'Tipe_Kendaraan' => 'Cruiser Bike',
            'Nama_Kendaraan' => 'Harley-Davidson Fat Boy',
            'Harga_Kendaraan' => 650000,
            'Jumlah_Kendaraan' => 2,
            'Deskripsi_Kendaraan' => 'An iconic cruiser bike for a smooth and comfortable ride.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
