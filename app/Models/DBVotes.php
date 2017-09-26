<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DBVotes extends CoreModel
{
    protected $table = 'db_votes';

    protected $fillable = [
        'id', 'post_id', 'user_id', 'likes', 'dislikes'

    ];
}
