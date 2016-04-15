<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	
	protected $fillable = ['role'];


	public function projects() {
		return $this->belongsToMany('twentyseven\Project');
	}

}
