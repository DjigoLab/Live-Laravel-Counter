<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\UserEntered;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function post(Request $request)
    {
        event(new UserEntered(Auth::user(), $request->get('counter')));
    }

    public function store(Request $request)
    {
        $request->validate(['username' => 'required|min:3|max:12']);
        $user = new User();
        $user->username = request('username');
        $user->save();
        return redirect('/rooms');
    }


}
