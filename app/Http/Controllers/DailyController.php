<?php namespace twentyseven\Http\Controllers;

use twentyseven\Http\Requests;
use twentyseven\Http\Requests\DailyRequest;
use twentyseven\Http\Controllers\Controller;

use Illuminate\Http\Request;
use twentyseven\daily;

class DailyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dailies = Daily::all();
		return view('dashboard.daily.list', compact('dailies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dashboard.daily.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DailyRequest $request)
	{
		Daily::create($request->all());
		return redirect('dashboard/dailyui');
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
	 * @param  int  $ids
	 * @return Response
	 */
	public function edit($id)
	{
		$daily = Daily::findOrFail($id);
		return view('dashboard.daily.edit', compact('daily'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, DailyRequest $request)
	{
		$daily = Daily::findOrFail($id);
		$daily->update($request->all());
		return redirect('/dashboard/daily');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Daily::destroy($id);
		return redirect('/dashboard/daily');
	}

}
