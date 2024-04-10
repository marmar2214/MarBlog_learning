<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');//frontend/index.blade.php (can use only blade.php)
    }
    

    public function show($id)
    {
        echo $id;
        return view('frontend.blog_post');
    }
}
