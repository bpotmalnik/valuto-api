<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        Account::all()
          ->each(function(Account $account){
              Transaction::factory()
                  ->count(20)
                  ->for($account)
                  ->create();
          });
    }
}
