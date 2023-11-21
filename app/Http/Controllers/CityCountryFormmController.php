<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityCountryFormmController extends Controller
{
    public function cceFormForm(Request $request){
        if ($request->has('city') and $request->has('country')) {
            $city = $request->input('city');
            $country = $request->input('country');
        }

        return view('Form.CityCountryFormView', ['city'=>$city, 'country'=>$country]);
    }
}
