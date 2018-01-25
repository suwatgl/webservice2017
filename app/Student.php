<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public $fillable = ['init_name','first_name', 'last_name'];
}
