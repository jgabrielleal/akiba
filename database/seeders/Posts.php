<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mockery\Undefined;

class Posts extends Seeder
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

        $query = "SELECT * FROM postagens ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        while ($fetch = mysqli_fetch_array($result)) {
            $author = null;
            switch ($fetch['idautor']) {
                case 15:
                    $author = 1;
                    break;
                case 16:
                    $author = 2;
                    break;
                case 17:
                    $author = 3;
                    break;
                case 18:
                    $author = 4;
                    break;
                case 21:
                    $author = 5;
                    break;
                case 22:
                    $author = 6;
                    break;
                case 23:
                    $author = 7;
                    break;
                case 24:
                    $author = 8;
                    break;
            }

            $existingPosts = DB::table('posts')->where('title', $fetch['titulo'])->first();

            if (!$existingPosts) {
                DB::table('posts')->insert([
                    'created_at' => now(),
                    'updated_at' => now(),
                    'slug' => Str::slug($fetch['titulo']),
                    'author' => $author,
                    'title' => $fetch['titulo'],
                    'cover' => '#',
                    'publication' => $fetch['texto'],
                    'tags' => json_encode($fetch['idtag']),
                    'fonts' => json_encode([['site' => $fetch['nomefonte'], 'link' => $fetch['fonte']], ['site' => $fetch['nomefonte2'], 'link' => $fetch['fonte2']]]),
                    'reactions' => json_encode([])
                ]);
            }
        }
    }
}
