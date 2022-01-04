<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\PublishedWork;
use App\Models\Genre;

class LoginController extends Controller
{
    public static $currentUser;
    public function login(){
        return view('login.login');
    }

    public function signup(){
        return view('login.signup');
    }

    public function error(){
        return view('login.error');
        
    }

    public function checkIfLoggedIn(){
        if (session()->has('user')){
            return redirect('home/loggedin');
        }
        else{
            return redirect('/loggedout');
        }
    }

    public function store(Request $request){
        $user = new Login;
        $user->username = $request->un;
        $user->name = $request->nm; 
        $user->email = $request->em; 
        $user->password = $request->ps; 
     
        $user->save();

        $getuser = Login::where('username', '=',$request->un)->value('userid');
        session(['user'=>$getuser]);
        return redirect('home/loggedin');
    }

    public function validateUser(Request $request){
        $var1 = $request->un;
        $var2 = $request->ps;
        $result1 = Login::where('username', '=',$var1)->value('username');
        $result2 = $result = Login::where('password', '=',$var2)->value('password');
        $result3 = Login::where('username', '=',$var1)->value('userid');
        //echo $result1;
        //echo $result2;
    
        if ($result1 == $request->un && $result2 == $request->ps){
            $currentUser = $result3;
            session(['user'=>$result3]);
            return redirect('home/loggedin');
        }
        else{
            return view('login.error');
        }
    }

    public function logout(){
        session()->forget('user');
        return redirect('/loggedout');
    }

    public function homeloggedin(){
        //$works = PublishedWorks::orderBy('created_at', 'DESC')->get();
        return view('home.loggedin', ['works'=>$works]);
    }

}
