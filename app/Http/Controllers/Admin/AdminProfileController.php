<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.profile.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
        $user = User::where('id', $id)->first();
        return view('admin.profile.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($id != Auth::user()->id) {
            return back();
        }
        $query = '';

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'program' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'max:11'],
            'username' => ['required', 'string'],
        ]);

        $name = $validated['name'];
        $program = $validated['program'];
        $email = $validated['email'];
        $address = $validated['address'];
        $phone_number = $validated['phone_number'];
        $username = $validated['username'];

        $query = User::where('id', $id)
            ->update([
                'name' => $name,
                'program' => $program,
                'address' => $address,
                'phone_number' => $phone_number,
                'email' => $email,
                'username' => $username,
            ]);

        if ($query) {
            return redirect()->route('admin.profile.index');
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
