<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
	protected $fillable = [
		'title',
		'content'
	];

	public function setTitleAttribute($value) {
		$this->attributes['title'] = $value;
		$this->attributes['slug'] = Str::slug($value);
	}
}
