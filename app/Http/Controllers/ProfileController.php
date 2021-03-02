<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

    }

    public function show($username)
    {
    	return 123;
    }

    public function edit()
    {
    	$countries = DB::select('SELECT id, nicename FROM countries');
    	return view('profile.edit', ['countries' => $countries ]);
    }

    public function update(Request $request)
    {
    	return 123;

    	$profile = Profile::find(Auth::id());




    	$profile->save();

    	return "success";
    }
}
