<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $data = [
            'productOne' => 'iphone',
            'productTwo' => 'Samsung',
            'productThre' => 'Symphony'
        ];
        $title = "Welcome to my CSE470 test";
        $description = "Created by Rifah";
        //return view('products.index', compact('title', 'description'));
        return view('products.index')->with('data', $data);
    }
}
