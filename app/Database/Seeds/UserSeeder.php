<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new UserModel();

        $user->insertBatch([
            [
                'name' => 'Jamal Muhlis',
                'email' => 'jamalmuhlis@gmail.com',
                'password' => password_hash('orakreti', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            [
                'name' => 'Faiz Hidayatulloh',
                'email' => 'faiz@smkw9jepara.sch.id',
                'password' => password_hash('orakreti', PASSWORD_DEFAULT),
                'role' => 'koordinator'
            ]
        ]);
    }
}
