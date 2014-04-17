<?php

class Torrent extends BaseModel {
	protected $fillable = ['name', 'visible'];

	public static $rules = [
		'name' => 'required'
		];
}
