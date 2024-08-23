<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        // Validate all the attributes
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['jpeg,png,jpg,gif,svg,webp'])],
        ]);

        // Create a user
        $userAttributes['password'] = Hash::make($userAttributes['password']);
        $user = User::create($userAttributes);

        // Store the logo and get the logo path
        $logoPath = $request->logo->store('logos');

        // Create the new employer
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        // Login with created user
        Auth::login($user);

        // Redirect to home page
        return redirect('/');
    }
}
