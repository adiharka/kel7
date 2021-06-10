<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function delivery() {
        return $this->hasOne(delivery::class);
    }

    public function purchase() {
        return $this->hasOne(purchase::class);
    }
}
