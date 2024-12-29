<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Podcasts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = "108.181.92.71";
        $username = "administradorbg";
        $password = "akibamaster1013";
        $db_name = "akiba-base";

        $conn = mysqli_connect("$host", "$username", "$password", "$db_name");

        $query = "SELECT * FROM podcasts ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        while ($fetch = mysqli_fetch_array($result)) {
            $existingPodcast = DB::table('podcasts')->where('title', $fetch['nome'])->first();

            if (!$existingPodcast) {
                DB::table('podcasts')->insert([
                    'created_at' => now(),
                    'updated_at' => now(),
                    'slug' => Str::slug($fetch['nome']),
                    'author' => '1',
                    'thumb' => '#',
                    'season' => 0,
                    'episode' => 0,
                    'title' => $fetch['nome'],
                    'summary' => $fetch['descricao'],
                    'description' => $fetch['texto'],
                    'audio_address' => '#',
                ]);
            }
        }
    }
}
