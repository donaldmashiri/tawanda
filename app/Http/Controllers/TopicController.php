<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('topics.index')->with('topics', Topic::all());
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
        $request->validate([
            'topic_name' => ['required', 'string', 'max:255'],
            'topic_description' => ['required', 'string', 'max:255'],
        ]);

        Topic::create([
            "user_id" => Auth::user()->id,
            "topic_name" => request('topic_name'),
            "topic_description" => request('topic_description'),
        ]);

        return redirect()->back()->with('success', 'Topic was successfully created');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        // Pass the topic to the view
        return view('topics.show', compact('topic'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
