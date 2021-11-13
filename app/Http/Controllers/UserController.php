<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show( User $user )
    {
        //User::withCount(['countries_users'])->get();

        return view('users.show', compact('user'));
    }
}
