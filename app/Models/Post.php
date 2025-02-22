<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'meta_tags',
        'meta_description',
        'status',
        'discussion',
        'revision',
        'user_id',
        'format',
        ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
