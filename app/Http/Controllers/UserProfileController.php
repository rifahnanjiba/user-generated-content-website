<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\PublishedWorks;
use App\Models\Genre;

class UserProfileController extends Controller
{
    public function viewProfile(){
        $current = session()->get('user');
        $user = UserProfile::where('userid','=',$current)->first();
        $works = PublishedWorks::where('userid','=',$current)->get();
        return view('profile.profile', ['user'=>$user], ['works'=>$works]);
    }
}
