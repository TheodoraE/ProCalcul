<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use HasFactory;
    
    public function types(){
        return $this->belongsTo(Type::class, "type_id");
    }
    public function dailyusers(){
        return $this->belongsTo(Dailyuser::class, "aliment_id");
    }

    public static function getActives(){
        return Aliment::where('active', true)->get();
    }

    // Simple foreign key
    public static function getByType($type){
        return Aliment::where('active',true)->where("type_id", $type)->with('types')->get();
    }
}
