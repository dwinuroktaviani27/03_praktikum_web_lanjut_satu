<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function products(){
        return view('products');
    }

    public function news($id){
        echo "a";
    }
}
