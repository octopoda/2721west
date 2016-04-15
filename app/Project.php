<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;
use twentyseven\ProjectImage;


class Project extends Model {


	protected $fillable = [
		'title',  'project_image', 'url'
	];

	/**
	 * Get the Image associated with the project
	 * @return [type] [description]
	 */
	

	public function companies() {
		return $this->belongsToMany('twentyseven\Company');
	}

	
	public function roles() {
		return $this->belongsToMany('twentyseven\Role');
	}

}
