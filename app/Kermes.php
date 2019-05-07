<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kermes extends Model
{
    protected $table = 'kermeses';

    protected $fillable = [
        'name','date','location','total_donation'
    ];

}
