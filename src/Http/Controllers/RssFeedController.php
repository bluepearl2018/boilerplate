<?php

namespace App\Http\Controllers;

use App\Models\User;

class RssFeedController extends Controller
{
    public function generateRssFeed()
    {
        $users = User::orderBy('id', 'desc')->get();
        return response()->view('feed', compact('users'))->header('Content-Type', 'application/xml');
    }
}
