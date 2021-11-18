<?php

namespace App\Services;

use App\Models\Country;
use App\Models\CountryVisitor;

class CountryVisitorService {

    public function getCountryWithVisitor()
    {
        $countries = Country::with('file')->get();

        foreach ($countries as $singleCountry) {
            $singleCountry->visitor = CountryVisitor::where('country_id', $singleCountry->id )->where('user_id', auth()->user()->id )->count();
        }

        return $countries;
    }

    public function getCountryWithVisitors($country_id)
    {

        $country = Country::with('file')->find($country_id);
        $country->visitors = CountryVisitor::with('users')->where('country_id', $country_id )->get();
        return $country;
    }
}
