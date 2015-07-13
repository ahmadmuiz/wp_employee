<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class job_offers extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'job_offers';
	protected $guard = array();
	protected $fillable = array('employee_id','job_title', 'work_load', 'function', 'location', 'start_date', 'advertisement', 'link', 'online_start', 'online_end');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
