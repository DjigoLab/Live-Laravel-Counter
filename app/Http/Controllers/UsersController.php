<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $request->validate(['username' => 'required']);
        $user = new User();
        $user->username = request('username');
        $user->save();
        return redirect('/rooms');
    }


}
