<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Usersiswa;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
