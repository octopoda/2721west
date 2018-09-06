<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectImage;


class Project extends Model {


	protected $fillable = [
		'title',  'project_class', 'url'
	];

	/**
	 * Get the Image associated with the project
	 * @return [type] [description]
	 */
	

	public function companies() {
		return $this->belongsToMany('App\Models\Company');
	}

	
	public function roles() {
		return $this->belongsToMany('App\Models\Role');
	}

}
