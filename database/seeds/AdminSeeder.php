<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = Str::random(60);
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'yetkili',
            'email' => 'admin@kermes.im',
            'password' => bcrypt('Kermes.im?19'),
            'type' => 'admin',
            'api_token'=> hash('sha256',$token)
        ]);
    }
}
