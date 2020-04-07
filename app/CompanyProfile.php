<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profiles';

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
    protected $fillable = ['name', 'moto', 'email', 'phone', 'intro', 'logo', 'pro_pic', 'address', 'copyright', 'fb_link', 'tw_link', 'ln_link'];
}
