<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Header;
use App\Models\Setting;
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
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'role' => 'admin',
            'name' => 'Ga Admin',
            'password' => bcrypt('password'),
            'email' => 'gaadmin@gaengineering.et'
        ]);
        Setting::factory()->create([]);
        About::factory()->create([]);
        Header::factory()->create([]);
    }
}
