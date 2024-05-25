<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews = Review::with(['reviewer', 'reviewee'])->get();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new review.
     */
    public function create()
    {
        $users = User::all();
        return view('reviews.create', compact('users'));
    }

    /**
     * Store a newly created review in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'reviewer_id' => 'required|exists:users,id',
            'reviewee_id' => 'required|exists:users,id',
        ]);

        Review::create($validated);

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    /**
     * Display the specified review.
     */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified review.
     */
    public function edit(Review $review)
    {
        $users = User::all();
        return view('reviews.edit', compact('review', 'users'));
    }

    /**
     * Update the specified review in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'reviewer_id' => 'required|exists:users,id',
            'reviewee_id' => 'required|exists:users,id',
        ]);

        $review->update($validated);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
