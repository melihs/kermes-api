<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Kermes extends Model
{
    protected $table = 'kermes';

    protected $fillable = [
        'name','date','location','total_donation'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
