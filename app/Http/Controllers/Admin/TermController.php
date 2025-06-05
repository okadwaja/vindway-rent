<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;
use Illuminate\Validation\Rule;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::latest()->paginate(10);
        return view('admin.terms.index', compact('terms'));
    }

    public function create()
    {
        $statuses = Term::STATUSES;
        return view('admin.terms.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => ['required', Rule::in(array_keys(Term::STATUSES))],
        ]);

        Term::create($request->only('title', 'description', 'status'));

        return redirect()->route('admin.terms.index')->with('success', 'Syarat & Ketentuan berhasil ditambahkan.');
    }

    public function show(Term $term)
    {
        return view('admin.terms.show', compact('term'));
    }

    public function edit(Term $term)
    {
        
        $statuses = Term::STATUSES;
        return view('admin.terms.edit', compact('term', 'statuses'));
    }

    public function update(Request $request, Term $term)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => ['required', Rule::in(array_keys(Term::STATUSES))],
        ]);

        $term->update($request->only('title', 'description', 'status'));

        return redirect()->route('admin.terms.index')->with('success', 'Syarat & Ketentuan berhasil diperbarui.');
    }

    public function destroy(Term $term)
    {
        $term->delete();

    return redirect()->route('admin.terms.index')->with('success', 'Syarat & Ketentuan berhasil dihapus.');
    }
}
