<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
	//
	protected $primaryKey = 'id';
	protected $table = 'employee';
	protected $guard = array();
	protected $fillable = array('name','department','address','address_line_1','address_line_2', 'zip', 'country', 'state', 'logo', 'teaser', 'sector', 'description', 'd_description', 'color_title', 'color_subtitle', 'color_text', 'bool_use_color');
	protected $hidden = ['created_date', 'created_by', 'updated_date', 'updated_by'];

	public $timestamps = false;
	public static $rules = array();

	public function measure_unit(){
		// return $this->hasOne('MeasureUnit');
	}
    
}
