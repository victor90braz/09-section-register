<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // ddd(request()->all());

        $attributes = request()->validate([
            'name' => [
                'required',
                'max:255',
                'min:3'
            ],
            'username' => [
                'required',
                'min:3',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'password' => [
                'required',
                'min:7',
                'max:255',
            ],
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
