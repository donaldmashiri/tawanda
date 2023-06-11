<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NofyMessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'message' => 'required|string|max:255',
        ]);

        $sender = auth()->user();
        $recipient = User::findOrFail($request->input('recipient_id'));

        $message = new DirectMessage();
        $message->sender_id = $sender->id;
        $message->recipient_id = $recipient->id;
        $message->message = $request->input('message');
        $message->save();

        // Send notification to the recipient
        $recipient->notify(new NewDirectMessage($sender, $message));

        return response()->json(['status' => 'success']);
    }
}
