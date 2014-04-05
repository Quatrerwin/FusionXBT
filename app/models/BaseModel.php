<?php

class BaseModel extends \Eloquent {
	/**
	 * Validation errors
	 */
	protected $errors;


	/**
	 * Validation rules
	 */
	protected static $rules = array();

	/**
	 * Listen for save event and attempt to validate
	 */
	public static function boot() {
		parent::boot();

		static::saving(function($model) {
			return $model->validate();
		});
	}

	/**
	 * Validates current attributes against rules
	 */
	public function validate() {
		$validator = Validator::make(
			$this->getAttributes(), 
			static::$rules
		);

		if ($validation->passes()) {
			return true;
		}

		$this->setErrors($validation->messages());

		return false;
	}

	/**
	 * Sets validation error messages
	 */
	protected function setErrors($errors) {
		$this->errors = $errors;
	}

	/**
	 * Returns true if any validation errors exist
	 * (i.e., the model could not be saved)
	 */
	public function hasErrors() {
		return !empty($this->errors);
	}

	/**
	 * Returns validation error messages
	 */
	public function getErrors() {
		return $this->errors;
	}
}
