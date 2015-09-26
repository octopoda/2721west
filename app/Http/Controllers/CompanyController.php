<?php namespace twentyseven\Http\Controllers;

use twentyseven\Http\Requests\CompanyRequest;
use twentyseven\Http\Controllers\Controller;

use Illuminate\Http\Request;
use twentyseven\Company;

class CompanyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$companies = Company::all();
		return view('dashboard.company.list', compact('companies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dashboard.company.create');
	}

	public function apiAll() {

	}


	public function api($guid) {
		$company = Company::where('guid', $guid)->first();
		return $company;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CompanyRequest $request)
	{
		$request['guid'] = str_random(5); 
		Company::create($request->all());
		return redirect('dashboard/company');
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
		$company = Company::findOrFail($id);
		// dd($company->toArray());
		return view('dashboard.company.edit', compact('company'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CompanyRequest $request)
	{
		

		$company = Company::findOrFail($id);
		$company->update($request->all());
		return redirect('/dashboard/company');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Company::destroy($id);
		return redirect('/dashboard/company');
	}

}
