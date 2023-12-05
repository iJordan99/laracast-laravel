<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        User::create(
            request()->validate([
                'name' => ['required', 'max:255'],
                'username' => ['required','min:3'],
                'email' => ['required', 'email','max:255'],
                'password' => ['required', 'max:255', 'min:7'],
        ]));

        return redirect('/');
    }
}
