<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contact_details extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'contact_details';
	protected $guard = array();
	protected $fillable = array('job_offer_id','salutation', 'firstname', 'lastname', 'phone', 'mobile', 'email', 'website', 'link', 'default_use');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();
}
