<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usersiswa;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'adminnya',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'admin',
        ]);

        Usersiswa::create([
            'name' => 'huha',
            'username' => 'huha',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
