<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the author of the comment.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get post this comment belongs to.
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
