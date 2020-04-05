<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commenter extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commenters';

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
    protected $fillable = ['name', 'email'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'commenter_id');
    }

}
