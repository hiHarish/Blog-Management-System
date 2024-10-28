<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['author', 'content', 'post_id'];

    // Optionally, you can set up the inverse relationship
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
