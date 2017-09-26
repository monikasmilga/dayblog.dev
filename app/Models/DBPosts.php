<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DBPosts extends CoreModel
{
    protected $table = 'db_posts';

    protected $fillable = [
        'id', 'user_id', 'post_title', 'post_url', 'post_text', 'path', 'mime_type', 'size', 'width', 'height'
    ];

}
