<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publish;
use App\Models\Genre;

class PublishController extends Controller
{
    public function create(){
        $genres = Genre::all();
        return view('create.create', ['genres'=>$genres]);
    }

    public function publish(Request $request){
        $work = new Publish;
        $work->title = $request->ttl;
        $work->description = $request->description;
        $work->genre = $request->genre;
        $work->work = $request->work;
        $work->userid = session()->get('user');
     
        $work->save();

        return redirect('home/loggedin');
    }
}
