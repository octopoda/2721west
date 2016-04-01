<?php namespace twentyseven\Http\Controllers;

use twentyseven\Http\Requests\ProjectRequest;
use twentyseven\Http\Controllers\Controller;

use Illuminate\Http\Request;
use twentyseven\Project;
use twentyseven\ProjectType;
use twentyseven\ProjectImage;

use twentyseven\Repositories\ProjectRepository;

use Illuminate\Contracts\Filesystem\Cloud as Cloud;


class ProjectController extends Controller {

	protected $projectRepository;


	function __construct(ProjectRepository $repository){
		$this->projectRepository = $repository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$projects = Project::all();
		return view('dashboard.projects.list', compact('projects'));
	}

	/**
	 * Display Listing of Project in JSON
	 *
	 * @return JSON
	 */
	public function apiIndex() 
	{
		return Project::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$projectType = ProjectType::lists('name', 'id');
		return view('dashboard.projects.create', compact('projectType'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Cloud $cloud, ProjectRequest $request)
	{
		$project = $this->projectRepository->saveProject($request->all());
		$projectImage = $this->projectRepository->placeImage($request->file('main-image'), $project);

		$projects = Project::all();
		return view('dashboard.projects.list', compact('projects'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::findOrFail($id);

		return view('dashboard.projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::findOrFail($id);
		$projectType = ProjectType::lists('name', 'id');
		return view('dashboard.projects.edit', compact('project', 'projectType'));
	}


	/**
	 * Upload Images to s3 and attach to project
	 * @param  Cloud  $cloud [description]
	 * @return [type]        [description]
	 */
	// public function uploadImages(Cloud $cloud, ImageRequest $request) {
	// 	$cloud->put($request->all, 'projectImage');
		
	// }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProjectRequest $request)
	{
		$project = Project::findOrFail($id);
		$project->update($request->all());
		return redirect('/dashboard/projects');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id);
		return redirect('/dashboard/projects');
	}

}
