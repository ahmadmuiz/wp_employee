<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class universities extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'universities';
	protected $guard = array();
	protected $fillable = array('name','active');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
