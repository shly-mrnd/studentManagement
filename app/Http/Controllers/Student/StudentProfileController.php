<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StudentProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('student.profile.index', ['user' => $user]);
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
        return view('student.profile.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
        $query = '';

        $validated = $request->validate([
            'student_id' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'program' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'max:11'],
            'address' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'contact' => ['required', 'string'],
            'contact_number' => ['required'],
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

        $query = User::where('id', $id)
            ->update([
                'student_id' => $student_id,
                'name' => $name,
                'program' => $program,
                'email' => $emai,
                'phone_number' => $phone_number,
                'address' => $address,
                'dob' => $dob,
                'contact' => $contact,
                'contact_number' => $contact_number,
            ]);

            if ($query) {
                return redirect()->route('student.profile.index');
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
