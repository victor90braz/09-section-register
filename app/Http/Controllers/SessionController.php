<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Exists;

class SessionController extends Controller
{

    public function create() {

        return view("sessions.create");
    }

    public function store() {

        // validate the request

        request()->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required']
        ])

        // attempt to authenticate and log in the user
        // based on the provided credentials

        // redirect with a success flash message
    }

    public function destroy() {

        auth()->logout();

        return redirect('/')->with('success', 'GoodBye');
    }
}
