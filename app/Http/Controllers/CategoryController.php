<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CategoryController extends Controller
{
    public function getCountries(){
        $countries = Country::find(1);
        $contriesCity = $countries->city;
        return view('Profile.getCountriesCityView', ['countries' => $countries]);
    }
}
