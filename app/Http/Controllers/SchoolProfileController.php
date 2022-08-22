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
            try {
                
                $profile = SchoolProfile::first();

                return $profile;
                

            } catch (\Throwable $th) {
                //throw $th;

                return $th;

            }

    }
}
