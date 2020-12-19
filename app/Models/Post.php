<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];


    /**
     * Get the author of the blog post.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the author of the blog post.
     */
    public function comments() {
        return $this->hasMany(Comment::class)->latest();
    }
}
