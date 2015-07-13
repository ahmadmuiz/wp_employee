<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nationalities extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'nationalities';
	protected $guard = array();
	protected $fillable = array('name','icon_url', 'active');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
