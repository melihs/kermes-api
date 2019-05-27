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

    //users many to relations
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    //donor many to relations
    public function donors()
    {
        return $this->belongsToMany(Donor::class)->withTimestamps();
    }

}
