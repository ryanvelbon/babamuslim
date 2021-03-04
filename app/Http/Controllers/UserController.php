<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {

		$validator = Validator::make($request->all(), [

			'email' => ['required',
						'unique:users',
						'max:320',
						'regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/i'],

			'username' => ['required',
						'unique:users',
						'min:8',
						'max:20',
						'regex:/^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/i'],

			'password' => ['required',
						'confirmed',
						// Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
						'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/i'],
		]);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}

		$email = $request['email'];
		$username = $request['username'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->email = $email;
		$user->username = $username;
		$user->password = $password;
		$user->save();

		Auth::login($user);

		return redirect()->route('profile.create');
    }
}
