<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;
use twentyseven\ProjectImage;


class Project extends Model {


	protected $fillable = [
		'title', 'project_type_id', 'role', 'description', 'url', 'context', 'headline'	
	];


	public function projectType() {
		return $this->belongsTo('twentyseven\ProjectType');
	}

	/**
	 * Get the Image associated with the project
	 * @return [type] [description]
	 */
	public function projectImage() {
		return $this->hasMany('twentyseven\ProjectImage');
	}

}
