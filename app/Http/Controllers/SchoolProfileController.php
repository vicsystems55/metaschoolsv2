<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SchoolProfile;

class SchoolProfileController extends Controller
{
    //

    public function school_profile(Request $request)
    {
        # code...
        $profile = SchoolProfile::first();

        return $profile;

    }
}
