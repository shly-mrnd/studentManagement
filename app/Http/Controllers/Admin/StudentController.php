<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')
        ->whereNot('program', 'CICT')
        ->whereNot('program', 'none')
        ->get();
        return view('admin.students.index', ['users' => $users]);
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
        $user = User::where('id', $id)->first();
        return view('admin.students.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = "";
        if ($request->action === 'approve') {
            $query = User::where('id', $id)
                ->update(['status' => 'approved']);
            if ($query) {
                return redirect()->route('admin.students.index');
            }
        } elseif ($request->action === 'decline') {
            $query = User::where('id', $id)
                ->update(['status' => 'declined']);
            if ($query) {
                return redirect()->route('admin.students.index');
            }
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
