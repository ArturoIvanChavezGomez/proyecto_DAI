<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function createTeacher()
    {
        return view('auth.register-teacher');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'control_number' => 'required|string|max:15',
            'name' => 'required|string|max:50',
            'paternal_name' => 'required|string|max:50',
            'maternal_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'control_number' => $request->control_number,
            'name' => $request->name,
            'paternal_name' => $request->paternal_name,
            'maternal_name' => $request->maternal_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        // LaraTrust line for getting the kind of user
        $user->attachRole($request->role_id);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}