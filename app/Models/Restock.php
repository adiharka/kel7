<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restock extends Model
{
    use HasFactory;

    public function items() {
        return $this->belongsToMany(item::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
