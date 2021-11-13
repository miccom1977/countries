<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryVisitor;
use App\Http\Requests\CountryVisitorEditRequest;

class CountryVisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( CountryVisitorEditRequest $request )
    {
        $countryVisitor = CountryVisitor::where('country_id', $request->country_id)->where('user_id', auth()->user()->id )->first();
        if(!$countryVisitor){
            $countryVisitor = new CountryVisitor;
            $countryVisitor->country_id = $request->country_id;
            $countryVisitor->user_id = auth()->user()->id;
            $countryVisitor->save();
            return back()->with('success', 'Add This country to Your list.');
        }else{
            return back()->with('error', 'This country is your list.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountryVisitor  $countryVisitor
     * @return \Illuminate\Http\Response
     */
    public function show(CountryVisitor $countryVisitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountryVisitor  $countryVisitor
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryVisitor $countryVisitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountryVisitor  $countryVisitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryVisitor $countryVisitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountryVisitor  $countryVisitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countryVisitor = CountryVisitor::where('country_id', $id)->where('user_id', auth()->user()->id )->first();
        $countryVisitor->delete();
        return back()->with('error', 'Oki, you werent there.');
    }
}
