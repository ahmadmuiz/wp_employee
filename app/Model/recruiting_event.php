<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class recruiting_event extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'recruiting_event';
	protected $guard = array();
	protected $fillable = array('employee_id','name', 'location', 'event_start', 'event_end', 'information', 'online_start', 'online_end');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
