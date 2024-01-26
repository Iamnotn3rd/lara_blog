<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required'],
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your credentials could not be verified',
            ]);

            // return back()
            //     ->withInput()
            //     ->withErrors(['email' => 'Your credentials could not be verified', 'password' => 'Wrong Password']);
        }

        session()->regenerate();

        return redirect('/')->with('message', 'You has been logined');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('message', 'You has been logout!');
    }
}
