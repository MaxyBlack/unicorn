<?php

namespace Unicorn\Models\Access\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SocialLogin
 * @package Unicorn\Models\Access\User
 */
class SocialLogin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'social_logins';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}