<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {

        $students = DB::table('users')
        ->whereNot('program', 'CICT')
        ->whereNot('program', 'none')
        ->get();

        $clerks = DB::table('users')
        ->whereNot('program', 'CICT')
        ->whereNot('program', 'BSIT')
        ->whereNot('program', 'BSIS')
        ->whereNot('program', 'BSCS')
        ->get();

        return view('admin.dashboard', [
            'students' => $students,
            'clerks' => $clerks,
        ]);
    }
}
