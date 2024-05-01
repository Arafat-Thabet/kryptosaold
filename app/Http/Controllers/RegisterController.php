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
        Register::create($validatedData);

        if ($request->ar) {
            $message = 'شكرا لك، سيتم التواصل معك قريبا';
            return redirect('/ar')->with('success', $message);
        }

        $message = 'Thank you for your registration. We will be in touch soon';
        return redirect('/')->with('success', $message);
    }
}
