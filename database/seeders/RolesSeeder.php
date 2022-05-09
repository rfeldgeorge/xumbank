<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Role::query()->delete();
        Role::create([
            'name' => 'superadmin'
        ]);
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'Retail Customer'
        ]);
    }
}
