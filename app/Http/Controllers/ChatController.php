<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $user = auth()->user();

        $message = new Message();
        $message->user_id = $user->id;
        $message->content = $request->input('message');
        $message->save();

        event(new ChatMessage($user, $message));

        return response()->json(['status' => 'success']);
    }
}
