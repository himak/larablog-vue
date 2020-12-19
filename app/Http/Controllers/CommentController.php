<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        // return $request->all();
        // return $request->only(['text','post_id']);
        // return $request->except('text');
        // return request()->except('user_id');
        // return request()->text;
        // return request('text');

//        Comment::create(
//            $request->all()
//        );

        auth()->user()->comments()->create(
            $request->all()
        );

//        return redirect()->back();
        return redirect('/posts/' . $request->post_id . '#comments');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
