<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chats.index')
            ->with('chats', Chat::all())
            ->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sender_id' => ['required', 'string', 'max:255'],
            'receiver_id' => ['required', 'string', 'max:255'],
        ]);

        Chat::create([
            "sender_id" => Auth::user()->id,
            "receiver_id" => request('receiver_id'),
            "message" => request('message'),
        ]);

        return redirect()->back()->with('success', 'Message Sent');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
