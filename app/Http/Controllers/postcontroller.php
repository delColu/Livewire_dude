<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    public function store(Request $request)
    {

        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post for the authenticated user
        PostModel::create([
            'title' => $request->title,
            'content' => $request->content,
            'is_archived' => false,
            'user_id' => auth()->id(), // sets the user_id
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
