<?php

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
        factory(App\User::class, 10)->create();
        factory(App\Kermes::class, 10)->create();
        factory(App\Donor::class, 10)->create();
        factory(App\Transaction::class, 10)->create();
        factory(App\UserKermes::class, 10)->create();
        factory(App\KermesDonor::class, 10)->create();
        $this->call(AdminSeeder::class);
    }
}
