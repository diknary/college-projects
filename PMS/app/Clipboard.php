<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clipboard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_session', 'id_document'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
