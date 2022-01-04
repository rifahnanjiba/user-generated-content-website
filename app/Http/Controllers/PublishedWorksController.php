<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishedWorks;
use App\Models\Login;
use App\Models\Genre;

class PublishedWorksController extends Controller
{
    public function getAllWorks(Request $request){
        $works = PublishedWorks::orderBy('created_at', 'DESC')->get();
        $genres = Genre::all();
        return view('home.loggedin', ['works'=>$works], ['genres'=>$genres]);
    }

    public function getSortedWorks(Request $request){
        if ($request->genreSelect == "All"){
            $works = PublishedWorks::orderBy('created_at', 'DESC')->get();
        }
        else{
            $works = PublishedWorks::where('genre', '=', $request->genreSelect)->get();
        }
        $genres = Genre::all();
        return view('home.loggedin', ['works'=>$works], ['genres'=>$genres]);
    }

    public function getAllWorksLO(){
        $works = PublishedWorks::orderBy('created_at', 'DESC')->get();
        $genres = Genre::all();
        return view('home.loggedout', ['works'=>$works], ['genres'=>$genres]);
    }

    public function getSortedWorksLO(Request $request){
        if ($request->genreSelect == "All"){
            $works = PublishedWorks::orderBy('created_at', 'DESC')->get();
        }
        else{
            $works = PublishedWorks::where('genre', '=', $request->genreSelect)->get();
        }
        $genres = Genre::all();
        return view('home.loggedout', ['works'=>$works], ['genres'=>$genres]);
    }

    public function getWork(Request $request){
        $post_id = $request->selectedToRead;
        $work = PublishedWorks::where('postid', '=', $post_id)->first();
        $user_id = PublishedWorks::where('postid', '=', $post_id)->value('userid');;
        $user = Login::where('userid','=', $user_id)->first();
        return view('home.loggedinread',['work'=>$work], ['user'=>$user]);
    }

    public function getWorkLO(Request $request){
        $post_id = $request->selected;
        $work = PublishedWorks::where('postid', '=', $post_id)->first();
        $user_id = PublishedWorks::where('postid', '=', $post_id)->value('userid');;
        $user = Login::where('userid','=', $user_id)->first();
        return view('home.loggedoutread',['work'=>$work], ['user'=>$user]);
    }

    public function delete(Request $request){
        $post_id = $request->selectedToDelete;
        PublishedWorks::where('postid', '=', $post_id)->delete();
        return redirect('/profile');
    }
}
