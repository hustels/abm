<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Report extends Model {

	
	protected $fillable =[
		'sm_num',
		'link',
		'application',
		'employer_id',
		'group',
		'created_at',
		'updated_at'
	];

	
	// Un report es creado por un usuario relationship
	public function creator(){
		return $this->belongsTo("App\User");
	}
}
