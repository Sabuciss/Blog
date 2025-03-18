<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["comment" , 'author',  'post_id'];

    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
}
