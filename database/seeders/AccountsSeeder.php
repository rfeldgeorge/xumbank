<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountNumber = rand(10000000,99999999);
       
        Account::query()->delete();
        Account::create([
            'user_id' => 1,
            'account_number' => $accountNumber . 1,
            'balance' => 10000000000
        ]);
        Account::create([
            'user_id' => 2,
            'account_number' => $accountNumber . 2,
            'balance' => 1000000
        ]);
        Account::create([
            'user_id' => 3,
            'account_number' => $accountNumber . 3,
            'balance' => 500000
        ]);
        Account::create([
            'user_id' => 4,
            'account_number' => $accountNumber . 4,
            'balance' => 740789779
        ]);

        Account::create([
            'user_id' => 5,
            'account_number' => $accountNumber . 5,
            'balance' => 350000
        ]);
    }
}
