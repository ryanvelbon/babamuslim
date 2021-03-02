<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
    	// dd(json_decode($request->getContent(), true));
    	return response()->json($request->all());
    }
}
