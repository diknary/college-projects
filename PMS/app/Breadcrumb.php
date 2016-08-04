<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breadcrumb extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level', 'user_session', 'breadcrumb'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
