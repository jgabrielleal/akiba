<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistBattle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playlist_battle')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'image' => '#',
        ]);
    }
}