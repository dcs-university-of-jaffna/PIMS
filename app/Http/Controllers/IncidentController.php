
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index(Incident $incident)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $posts = Cache::remember(
            'count.posts.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return  $user->posts->count();
            }
        );
        $followersCount = Cache::remember(
            'count.followers.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return  $user->profile->followers->count();
            }
        );
        $followingCount = Cache::remember(
            'count.following.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return  $user->following->count();
            }
        );
        return view('profiles/index', compact('user', 'follows', 'posts', 'followersCount', 'followingCount'));
    }
}

