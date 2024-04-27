<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:registers',
        ]);

        // Create a new register instance
        $register = Register::create($validatedData);

        // Optionally, you can do something after registration, like redirecting
        return redirect('/')->with('success', 'Registration successful!');
    }
}
