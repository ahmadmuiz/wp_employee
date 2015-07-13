<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'student';
	protected $guard = array();
	protected $fillable = array('firstname','lastname', 'mobile', 'email', 'link', 'cv', 'field_of_study_id', 'university', 'faculty', 'major', 'minor', 'graduantion_year', 'gpa', 'dissertation', 'description', 'nationality');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
