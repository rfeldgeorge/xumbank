<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    public function run()
    {
        Profile::query()->delete();
        Profile::create([
            'user_id' => 1
        ]);
        Profile::create([
            'user_id' => 2
        ]);
        Profile::create([
            'user_id' => 3
        ]);

        Profile::create([
            'user_id' => 4
        ]);

        Profile::create([
            'user_id' => 5
        ]);
    }
}
