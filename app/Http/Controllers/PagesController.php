<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        $msg = 'Thank you for visiting our website.';
        $tnx = 'Thank you.';

        // return view('pages.about', compact('msg'));
        // return view('pages.about', ['msg' => $msg]);
        // return view('pages.about')->with(['msg' => $msg, 'tnx' => $tnx]);
        return view('pages.about')->withMsg($msg)->withTnx($tnx);
    }
}
