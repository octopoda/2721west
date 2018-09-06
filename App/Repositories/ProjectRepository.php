<?php namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Cloud as Cloud;
use App\Models\ProjectImage;
use App\Models\Project;

class ProjectRepository {

	/**
	 * @var Cloud
	 */
	public $cloud;

	protected $s3Url = '/projects/';

	/**
	 * @param Cloud $cloud [description]
	 */
	public function __construct(Cloud $cloud) {
		$this->cloud = $cloud;
	}

	
	/**
	 * Place Image on S# and save URL in project Images
	 * @param  request $file 
	 * @return object       
	 */
	public function placeImage($file, $project) {
		$name = $this->changeFileName($file->getClientOriginalName());
		$this->cloud->put($this->s3Url.$name, file_get_contents($file));

		return $this->saveImage($name, $project);
	}



	public function saveProject($inputs) {
		$project = new Project();
		$project = $project->create($inputs);
		return $project;
	}


	public function getAllProjects() {
		return Project::all();
	}

	

	/**
	 * Change the File Name to underscores instead of spaces
	 * @param  string $name 
	 * @return string       
	 */
	protected function changeFileName($name) {
		return str_replace(" ", "-", $name);
	}

	/**
	 * Save the Image in the Database
	 * @param  string $name 
	 * @return object       
	 */
	protected function saveImage($name, $project) {
		$projectImage = new ProjectImage();
		$projectImage->image_url = $projectImage->getUrl($name);
		$projectImage->project()->associate($project);
		$projectImage->save();

		$project->projectImage()->save($projectImage);

		return $projectImage;
	}


	



}

