<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
      'donor_id','user_id','sales','return','product','transfer','payment'
    ];

    // one to many relations invers
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // one to many relations invers
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
