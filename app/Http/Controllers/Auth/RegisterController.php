<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'student_id' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'program' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required', 'max:11'],
            'address' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'contact' => ['required', 'string'],
            'contact_number' => ['required'],
            'username' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $student_id = $validated['student_id'];
        $name = $validated['name'];
        $program = $validated['program'];
        $emai = $validated['email'];
        $phone_number = $validated['phone_number'];
        $address = $validated['address'];
        $dob = $validated['dob'];
        $contact = $validated['contact'];
        $contact_number = $validated['contact_number'];
        $username = $validated['username'];
        $password = Hash::make($validated['password']);

        $user = User::create([
            'student_id' => $student_id,
            'name' => $name,
            'program' => $program,
            'email' => $emai,
            'phone_number' => $phone_number,
            'address' => $address,
            'dob' => $dob,
            'contact' => $contact,
            'contact_number' => $contact_number,
            'username' => $username,
            'password' => $password,
        ])->assignRole('student');;

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
