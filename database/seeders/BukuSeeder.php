<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('buku')->insert([
            [
                'title' => 'Pengantar Metode Penelitian',
                'author' => 'Maryam B. Gainau',
                'cover_url' => 'https://picsum.photos/id/1021/200/300',
                'description' => 'Buku tentang metodologi penelitian',
                'year' => 2020,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Yang Belum Usai',
                'author' => 'Pijar Psikologi',
                'cover_url' => 'https://picsum.photos/id/1025/200/300',
                'description' => 'Kumpulan tulisan psikologi',
                'year' => 2021,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
