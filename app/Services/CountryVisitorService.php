<?php

namespace App\Services;

use App\Models\Country;
use App\Models\CountryVisitor;

class CountryVisitorService {

    public function getCountryWithVisitor()
    {
        $countries = Country::all();

        foreach ($countries as $singleCountry) {
            $singleCountry->visitor = CountryVisitor::where('country_id', $singleCountry->id )->where('user_id', auth()->user()->id )->count();
        }

        return $countries;
    }

    public function getCountryWithVisitors($country_id)
    {

        $country = Country::find($country_id);
        $country->visitors = CountryVisitor::with('users')->where('country_id', $country_id )->get();
        return $country;
    }
    /*
    public function signInFirstTerm( BookingUpdateRequest $request )
    {
        $booking = Booking::where('booking_date', '>', NOW())->whereNull('car_plate')->first();
        if( !$booking )
        {
            $response = [
                'message' => 'We no have free terms ;/'
            ];
            return response($response, 201);
        }

        $booking->car_plate = $request->car_plate;
        $booking->save();
        $response = [
            'booking' => $booking,
            'message' => 'Your term is reserved'
        ];
        return response($response, 201);

    }

    public function getAllReservedBookings()
    {
        return Booking::whereNotNull('car_plate')->get();
    }

    public function releaseTerm(ReleaseRequest $request )
    {
        $booking = Booking::where('car_plate', $request->car_plate)->first();
        if( !$booking )
        {
            $response = [
                'message' => 'We no have Yours car_plate in system ;/'
            ];
            return response($response, 201);
        }

        $booking->car_plate = NULL;
        $booking->save();
        $response = [
            'message' => 'Your term is released'
        ];
        return response($response, 201);
    }
    */
}
