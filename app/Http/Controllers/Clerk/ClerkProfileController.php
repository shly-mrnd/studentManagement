<?php

namespace App\Http\Controllers\Clerk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClerkProfileController extends Controller
{
    public function index() {

        $user = User::where('id', Auth::user()->id)->first();
        return view('clerk.profile', ['user' => $user]);
    }

    public function show($id)
    {
        if ($id != Auth::user()->id) {
            return back();
        }
    }
}
