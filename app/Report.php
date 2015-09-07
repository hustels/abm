<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

	
	protected $fillable =[
		'sm_num',
		'link',
		'fecha',
		'application',
		'employer_id',
		'group',
		'created_at',
		'updated_at'
	];
}
