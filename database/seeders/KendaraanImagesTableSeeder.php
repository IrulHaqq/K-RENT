<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 1, 
            'image_path' => ('images/Camry_1.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 1, 
            'image_path' => ('images/Camry_2.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 1, 
            'image_path' => ('images/Camry_3.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 2, 
            'image_path' => ('images/H2R_1.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 2, 
            'image_path' => ('images/H2R_2.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 2, 
            'image_path' => ('images/H2R_3.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 3, 
            'image_path' => ('images/Ford_explorer_1.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 3, 
            'image_path' => ('images/Ford_explorer_2.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 3, 
            'image_path' => ('images/Ford_explorer_3.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 3, 
            'image_path' => ('images/Ford_explorer_4.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 4, 
            'image_path' => ('images/MX5_1.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 4, 
            'image_path' => ('images/MX5_2.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 4, 
            'image_path' => ('images/MX5_3.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 4, 
            'image_path' => ('images/MX5_4.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 4, 
            'image_path' => ('images/MX5_5.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 5, 
            'image_path' => ('images/Harley_fatboy_1.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 5, 
            'image_path' => ('images/Harley_fatboy_2.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan_images')->insert([
            'kendaraan_id' => 5, 
            'image_path' => ('images/Harley_fatboy_3.jpg'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
