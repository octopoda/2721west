<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$roles = Role::all();
		return view('dashboard.roles.list', compact('roles'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dashboard.roles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$role = Role::create($request->all());
		return redirect('/dashboard/roles');
	}

	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$role = Role::findOrFail($id);
		return view('dashboard.roles.edit', compact('role'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$role = Role::findOrFail($id);
		$role->update($request->all());
		return redirect('/dashboard/roles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Role::destroy($id);
		return redirect('/dashboard/roles');
	}


	/*
	|--------------------------------------------------------------------------
	| API shite
	|--------------------------------------------------------------------------
	|
	| Description 1
	|  Description 2
	| 
	|
	*/



	/**
	 * API Call
	 * @return JSON
	 */
	public function apiIndex() {
		return Role::with('projects')->get();
	}

}
