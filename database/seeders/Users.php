<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
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

        $query = "SELECT * FROM usuarios ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        while ($fetch = mysqli_fetch_array($result)) {
            $existingUser = DB::table('users')->where('username', $fetch['usuario'])->first();

            if (!$existingUser) {
                DB::table('users')->insert([
                    'created_at' => now(),
                    'updated_at' => now(),
                    'username' => $fetch['usuario'],
                    'password' => Hash::make($fetch['senha']),
                    'permissions' => json_encode(explode('/', $fetch['acesso'])),
                    'name' => $fetch['nome'],
                    'nickname' => $fetch['apelido'],
                    'avatar' => "#",
                    'email' => "#",
                    'birthday' => "#",
                    'city' => "#",
                    'state' => "#",
                    'bibliography' => $fetch['biografia'],
                    'social_networks' => json_encode([]),
                    'likes' => json_encode([])
                ]);
            }
        }
    }
}
