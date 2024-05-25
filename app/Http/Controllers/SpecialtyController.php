<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\User;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the specialties.
     */
    public function index()
    {
        $specialties = Specialty::with('user')->get();
        return view('specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new specialty.
     */
    public function create()
    {
        $users = User::all();
        return view('specialties.create', compact('users'));
    }

    /**
     * Store a newly created specialty in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        Specialty::create($validated);

        return redirect()->route('specialties.index')->with('success', 'Specialty created successfully.');
    }

    /**
     * Display the specified specialty.
     */
    public function show(Specialty $specialty)
    {
        return view('specialties.show', compact('specialty'));
    }

    /**
     * Show the form for editing the specified specialty.
     */
    public function edit(Specialty $specialty)
    {
        $users = User::all();
        return view('specialties.edit', compact('specialty', 'users'));
    }

    /**
     * Update the specified specialty in storage.
     */
    public function update(Request $request, Specialty $specialty)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $specialty->update($validated);

        return redirect()->route('specialties.index')->with('success', 'Specialty updated successfully.');
    }

    /**
     * Remove the specified specialty from storage.
     */
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();

        return redirect()->route('specialties.index')->with('success', 'Specialty deleted successfully.');
    }
}
