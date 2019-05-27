<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = "donors";
    protected $fillable = [
        'balance'
    ];

    //kermes many to relations
    public function kermeses()
    {
        return $this->belongsToMany(Kermes::class)->withTimestamps();
    }

}
