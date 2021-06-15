<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailyuser extends Model
{
    use HasFactory;

    public function aliments(){
        return $this->hasMany(Aliment::class, "aliment_id");
    }
}
