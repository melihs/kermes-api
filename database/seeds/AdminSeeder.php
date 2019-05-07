<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'yetkili',
            'email' => 'admin@kermes.im',
            'password' => bcrypt('Kermes.im?19'),
            'type' => 'admin'
        ]);
    }
}
