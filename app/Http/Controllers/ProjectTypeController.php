<?php namespace twentyseven\Http\Controllers;


use twentyseven\Http\Requests\ProjectTypeRequest;

use twentyseven\Http\Controllers\Controller;
use twentyseven\ProjectType;

use Illuminate\Http\Request;

class ProjectTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projectTypes = ProjectType::all();
		return view('dashboard.types.list', compact('projectTypes'));
	}


	/**
	 * Display the Project Types in JOSN
	 * @return JSON
	 */
	public function apiIndex() {
		return ProjectType::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dashboard.types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectTypeRequest $request)
	{
		ProjectType::create($request->all());
		return redirect('/dashboard/project-types');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projectType = ProjectType::findOrFail($id);
		return view('dashboard.types.edit', compact('projectType'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProjectTypeRequest $request)
	{
		$projectType = ProjectType::findOrFail($id);
		$projectType->update($request->all());
		return redirect('/dashboard/project-types');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProjectType::destroy($id);
		return redirect('/dashboard/project-types');
	}

}
