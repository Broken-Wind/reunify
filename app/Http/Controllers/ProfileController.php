<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class ProfileController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(String $slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('profile.index', compact('user'));
    }

    public function edit(String $slug)
    {

        $user = User::where('slug', $slug)->first();

        return view('profile.edit', compact('user'));

    }

    public function update()
    {

        $user = Auth::user();

        $user->update([

            'name' => request('name'),

            'phone' => request('phone'),

            'email' => request('email'),

            'linkedin' => request('linkedin'),

        ]);

        return view('profile.edit', compact('user'));

    }

    public function code(String $slug)
    {

        $user = User::where('slug', $slug)->first();

        return view('profile.code', compact('user'));
    }
}
