<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = [
        'description',
        'content'
    ];
    public $primaryKey = 'post_id';
    public $incrementing = 'true';
}
