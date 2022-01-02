<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publish;

class PublishController extends Controller
{
    public function create(){
        return view('create.create');
    }

    public function publish(Request $request){
        $work = new Publish;
        $work->title = $request->ttl;
        $work->description = $request->description;
        $work->genre = $request->genre;
        $work->work = $request->work;
        $work->userid = session('user');
     
     
        $work->save();
        return redirect('home/loggedin');
    }
}
