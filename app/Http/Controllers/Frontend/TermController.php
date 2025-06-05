<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::where('status', Term::ACTIVE)->latest()->get();

        return view('frontend.terms', compact('terms'));
    }
}
