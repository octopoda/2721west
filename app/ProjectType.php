<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;


class ProjectType extends Model {

	/**
	 * No timestamps needed for Project Type
	 * @var boolean
	 */
	public $timestamps = false;

	/**
	 * Mass Assignament
	 * @var array
	 */	
	protected $fillable = ['name'];


	public function projects() {
		return $this->hasMany('twentyseven\Project');
	}

	
}
