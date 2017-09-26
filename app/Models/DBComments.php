<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DBComments extends CoreModel
{
    protected $table = 'db_comments';

    protected $fillable = [
        'id', 'post_id', 'comment_text', 'comment_title', 'user_id'
    ];

}
