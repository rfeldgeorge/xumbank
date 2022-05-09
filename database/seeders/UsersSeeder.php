<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::query()->delete();
        DB::table('role_users')->delete();

        $supserAdminRole = Role::where('name', 'superadmin')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $customerRole = Role::where('name', 'Retail Customer')->first();

        $supserAdmin = User::create([
            'name' => 'Super',
            'lname' => 'Admin',
            'creator_id' => 1,
            'email' => 'super@admin.com',
            'phone' => '2348051323610',
            'password' => Hash::make('superadmin')
        ]); 

        $admin = User::create([
            'name' => 'Admin',
            'lname' => 'User',
            'creator_id' => 1,
            'email' => 'admin@admin.com',
            'phone' => '2348051323610',
            'password' => Hash::make('admin')
        ]);

        $customer = User::create([
            'name' => 'Customer',
            'lname' => 'User',
            'creator_id' => 1,
            'email' => 'customer@customer.com',
            'phone' => '2348051323610',
            'password' => Hash::make('customer')
        ]);

        $user = User::create([
            'name' => 'George',
            'lname' => 'Rosenfeld',
            'creator_id' => 4,
            'email' => 'rosenfeldgeorge190@gmail.com',
            'phone' => '12093155771',
            'password' => Hash::make('IloveYOU12@')
        ]);
        
        $user = User::create([
            'name' => 'Michael',
            'lname' => 'Franklin',
            'creator_id' => 1,
            'email' => 'mhfranklin@yahoo.com',
            'phone' => '3108574423',
            'password' => Hash::make('Franklin4love4Eva')
        ]);
        $supserAdmin->roles()->attach($supserAdminRole);
        $admin->roles()->attach($adminRole);
        $customer->roles()->attach($customerRole);
        $user->roles()->attach($customerRole);
    }
}
