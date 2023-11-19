<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Position;
use App\Models\City;
use App\Models\Role;
use App\Models\Country;

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
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function country (){
        return $this->belongsTo(Country::class);
    }
}
