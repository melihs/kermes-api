<?php


namespace App\Traits;

use Illuminate\Support\Str;

trait Authenticatable
{
    public function generateToken()
    {
        $this->api_token = hash('sha256',Str::random(80));

        return $this->api_token;
    }
}