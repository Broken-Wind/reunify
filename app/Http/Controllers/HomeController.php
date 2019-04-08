<?php

namespace reunify\Http\Controllers;

use Illuminate\Http\Request;

use reunify\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(String $slug)
    {
        $user = User::where('slug', $slug)->first();

        return app('reunify\Http\Controllers\ProfileController')->index($slug);
    }
}
