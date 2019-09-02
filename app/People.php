<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $table = 'people';
	protected $fillable = ['pin', 'name', 'lastname', 'typeAccount'];

	public function user()
	{
		return $this->hasOne('App\User');
	}
}
