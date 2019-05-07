<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
      'donor_id','user_id','sales','return','product','transfer','payment'
    ];

}
