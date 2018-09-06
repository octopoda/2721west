<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model {

	public $fillable = ['image_url', 'project_id'];

	/**
	 * URL for S3 image storaget
	 * @var string
	 */
	private $url = "http://2721west-site.s3.amazonaws.com/projects/";
	

	/**
	 * Get the Project Associated with the Project Image
	 * @return [type] [description]
	 */
	public function project() {
		$this->belongsTo('App\Models\project');
	}

	/**
	 * Get Url for DB 
	 */
	public static function getUrl($name) {
		return 'http://2721west-site.s3.amazonaws.com/projects/' . $name;
	}




	




	/*
	|--------------------------------------------------------------------------
	| Helper Methods
	|--------------------------------------------------------------------------
	|
	*/

}
