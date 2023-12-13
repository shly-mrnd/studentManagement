<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
class PrintIdController extends Controller
{
    public function index()
    {
        return view('student.profile.viewid');
    }
    public function PrintID()
    {
        $pdf = Pdf::loadView('student.profile.viewid');
        return $pdf->stream('myID.pdf');
    }
}
