<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitletterModel extends Model
{
    protected $table = 'submitted_letter';
	protected $primaryKey = 'NIM';
	public $timestamps = false;
}
