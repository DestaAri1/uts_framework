<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Desta',
            'email' => 'desta.ari@gmail.com',
            'password' => bcrypt('destaari')
        ]);
        User::create([
            'name' => 'Christopher',
            'email' => 'christoph@gmail.com',
            'password' => bcrypt('chris123')
        ]);
    }
}
