<?php

class Torrent extends BaseModel {
	protected $fillable = ['name', 'description', 'visible'];

	public static $rules = [
		'name' => 'required'
		];
}
