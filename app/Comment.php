<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['commenter_id', 'post_id', 'comment'];

    public function commenter()
    {
        return $this->belongsTo(Commenter::class, 'commenter_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
