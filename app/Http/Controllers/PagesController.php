<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

//        return Post::all();
//        return Post::first();
//        return Post::all()->last();
//        return Post::all()->pluck('title');

        return view('welcome', [
            'title' => '(ಠ_ಠ)',
            'posts' => Post::all()
        ]);

    }

    public function about() {
        return view('about')->with([
            'title' => 'About',
            'description' => 'This is content page.'
        ]);
    }

    public function contact() {
        return view('contact')->withTitle('Contact');
    }
}
