<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    protected $table = 'letter_status';
	protected $primaryKey = 'id';
	public $timestamps = false;
}
