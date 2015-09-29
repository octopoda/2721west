<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $fillable =  [
		'first_name', 'last_name', 'company', 'email', 'guid'
	];


	

	public function fullName() {
		return $this->first_name . ' ' .  $this->last_name;
	}


	public function session() {
		return $this->hasMany('twentyseven\Session');
	}



}
