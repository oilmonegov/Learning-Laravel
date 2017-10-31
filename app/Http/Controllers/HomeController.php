<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['goto']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(request('laravel'), 403, 'Laravel Parameter Not Found.');
        return view('home');
    }

    public function goto($params, Request $request)
    {
        // Getting Route Parameter from the controller
        return $params . ' and ' . $request->params . ' and again ' . request('params');
        
        // return redirect()->refresh()
        // return redirect()->action('HomeController@index');
        // return redirect()->back();
        // return redirect()->away('https://google.com');
        // return redirect()->home();
        // return redirect()->secure('to');
        // return redirect()->to('to);
        // return redirect()->guest();
        // return redirect()->intended();
        
        // return response()->file('dl/YouWiNConnectSuccessfulApplicants_South_South.pdf');
        // return response()->download('dl/655.txt', 'Oilmone-README-File-V2.txt');
        
        // return redirect()->route('home', ['laravel' => 'Laravel Framework', 'programmer' => 'Abanum Chuks']);
    }
}
