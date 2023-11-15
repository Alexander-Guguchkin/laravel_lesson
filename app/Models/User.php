<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Position;
use App\Models\City;

class User extends Model
{
    use HasFactory;

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
}
