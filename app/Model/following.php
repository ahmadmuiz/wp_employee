<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class following extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'following';
	protected $guard = array();
	protected $fillable = array('student_id','employee_id');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();

}
