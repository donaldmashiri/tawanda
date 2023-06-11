<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateUserController extends Controller
{
    public function calculateRating()
    {
        $users = User::all();

        foreach ($users as $user) {
            $posts = Post::where('user_id', $user->id)->get();
            $rating = 0;

            foreach ($posts as $post) {
                $rating += $post->upvotes;
            }

            $user->rating = $rating;
            $user->save();
        }

        return redirect()->back()->with('success', 'User ratings calculated successfully.');
    }
}
