<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPointsController extends Controller
{
    public function calculateAveragePoints()
    {
        $users = User::all();

        foreach ($users as $user) {
            $posts = Post::where('user_id', $user->id)->get();
            $totalPoints = 0;
            $postCount = $posts->count();

            foreach ($posts as $post) {
                $totalPoints += ($post->upvotes - $post->downvotes);
            }

            $averagePoints = ($postCount > 0) ? $totalPoints / $postCount : 0;

            $user->average_points = $averagePoints;
            $user->save();
        }

        return redirect()->back()->with('success', 'Average points calculated successfully.');
    }
}
