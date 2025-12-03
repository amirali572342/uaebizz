<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');

    }

    public function post_details()
    {
       return view('frontend.pages.post-detail');
    }
}
