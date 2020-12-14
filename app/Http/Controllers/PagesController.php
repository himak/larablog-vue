<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome', [
            'title' => '(ಠ_ಠ)',
            'posts' => [
                'just like hamburger; exactly like hamburger',
                'the blender who would recite shakespeare',
                'what we might mean when we say a clock is wrong',
            ]
        ]);
    }

    public function about() {
        return 'about page';
    }

    public function contact() {
        return 'about contact';
    }

    public function dudes() {
        return [
            'princess bubblegum',
            'lyra belacqua',
            'imperator furiosa',
            'solid...er snake'
        ];
    }
}
