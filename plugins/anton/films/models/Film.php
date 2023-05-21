<?php

namespace Anton\Films\Models;

use Model;
use Winter\Storm\Database\Relations\AttachOne;

/**
 * Model
 */
class Film extends Model
{
	use \October\Rain\Database\Traits\Validation;

	/*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
	public $timestamps = false;


	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'anton_films_';

	/**
	 * @var array Validation rules
	 */
	public $rules = [];
}
