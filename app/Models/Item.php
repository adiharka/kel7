<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function restocks()
    {
        return $this->belongsToMany(restock::class);
    }

    public function purchase()
    {
        return $this->hasMany(purchase::class);
    }

    public function image()
    {
        return $this->hasOne(image::class);
    }
}
