<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_folder',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
