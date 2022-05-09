<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\AccountsSeeder;
use Database\Seeders\ProfilesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       $this->call(RolesSeeder::class);
       $this->call(UsersSeeder::class);
       $this->call(AccountsSeeder::class);
       $this->call(ProfilesSeeder::class);
    }
}
