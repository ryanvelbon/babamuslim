<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {

    }

    public function show($username)
    {
    	return 123;
    }

    public function create()
    {
    	$countries = DB::select('SELECT id, nicename FROM countries');
    	return view('profile.create', ['countries' => $countries ]);
    }

    public function store(Request $request)
    {
        $profile = new Profile();

        $profile->user_id = Auth::id();
        $profile->gender = $request['gender'];
        $profile->first_name = $request['firstName'];
        $profile->last_name = $request['lastName'];
        $profile->dob = $request['yyyy'] . "-" .
                        $request['mm'] . "-" .
                        $request['dd'];
        $profile->nationality = $request['nationality'];
        $profile->height = $request['height'];
        $profile->weight = $request['weight'];
        $profile->skin_color = $request['skinColor'];
        $profile->hair_color = $request['hairColor'];
        $profile->eye_color = $request['eyeColor'];
        $profile->edu = $request['edu'];
        $profile->job = $request['job'];
        $profile->salary = $request['salary'];
        $profile->relationship_status = $request['relStatus'];
        $profile->kids = $request['kids'];
        $profile->bio = $request['bio'];      

        $profile->save();

    	return redirect()->route('profile.edit.extra');
    }

    public function editExtraInfo()
    {
        return view('profile.editExtra');
    }

    public function updateExtraInfo(Request $request)
    {
        $profile = Profile::where('user_id', Auth::id())->first();

        // store the data of the extra fields
        $profile->muslim_since = $request['muslimSince'];
        $profile->salat = $request['salat'];
        $profile->quran_knowledge = $request['quranKnowledge'];
        $profile->tattoos = $request['tattoos'];
        $profile->smoking_freq = $request['smokingFreq'];
        $profile->drinking_freq = $request['drinkingFreq'];

        $profile->save();

        return redirect()->route('home');
    }
}
