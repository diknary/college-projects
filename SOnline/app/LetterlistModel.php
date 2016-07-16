<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterlistModel extends Model
{
    protected $table = 'list_letter';
	protected $primaryKey = 'letter_id';
	public $timestamps = false;
}
