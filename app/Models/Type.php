<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function aliments(){
        return $this->hasMany(Aliment::class, "type_id");
    }

    public static function getActives(){
        return Type::where('active', true)->get();
    }
}
