<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ClerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')
        ->whereNot('program', 'CICT')
        ->whereNot('program', 'BSIT')
        ->whereNot('program', 'BSIS')
        ->whereNot('program', 'BSCS')
        ->get();
        return view('admin.clerk.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clerk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required', 'max:11'],
            'username' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $phone_number = $validated['phone_number'];
        $username = $validated['username'];
        $password = Hash::make($validated['password']);

        $user = User::create([
            'name' => $name,
            'program' => 'none',
            'email' => $email,
            'phone_number' => $phone_number,
            'status' => 'active',
            'username' => $username,
            'password' => $password,
        ])->assignRole('clerk');;

        return redirect(route('admin.clerk.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.clerk.show', ['user' => $user]);

        // return view('admin.clerk.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.clerk.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = '';

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'max:11'],
            'username' => ['required', 'string'],
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $phone_number = $validated['phone_number'];
        $username = $validated['username'];

        $query = User::where('id', $id)
            ->update([
                'name' => $name,
                'phone_number' => $phone_number,
                'email' => $email,
                'username' => $username,
            ]);

        if ($query) {
            return redirect()->route('admin.clerk.index');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
