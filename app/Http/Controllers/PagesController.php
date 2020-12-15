<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

        return view('welcome', [
            'posts' => Post::latest('id')->get()
        ]);

    }
}
