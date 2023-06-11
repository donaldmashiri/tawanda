<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicPostController extends Controller
{
    public function create()
    {
        return view('create_topic');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $topic = new Topic();
        $topic->title = $request->input('title');
        $topic->content = $request->input('content');
        $topic->upvotes = 0; // Initialize upvotes to 0
        $topic->save();

        return redirect()->route('home')->with('success', 'Topic created successfully.');
    }

    public function show($id)
    {
        $topic = Topic::findOrFail($id);

        return view('show_topic', compact('topic'));
    }

    public function sortByUpvotes()
    {
        $topics = Topic::orderBy('upvotes', 'desc')->get();

        return view('homepage', compact('topics'));
    }
}
