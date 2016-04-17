<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $fillable =  [
		'message', 'company', 'position', 'guid', 'archived'
	];


	
	public function session() {
		return $this->hasMany('twentyseven\Session');
	}


	public function projects() {
		return $this->belongsToMany('twentyseven\Project');
	}


}
