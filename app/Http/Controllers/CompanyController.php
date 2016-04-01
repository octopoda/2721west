<?php namespace twentyseven\Http\Controllers;

use twentyseven\Http\Requests\CompanyRequest;
use twentyseven\Http\Requests\SessionRequest;
use twentyseven\Http\Controllers\Controller;

use Illuminate\Http\Request;
use twentyseven\Company;
use twentyseven\Session;
use Carbon\Carbon;

class CompanyController extends Controller {

	protected $company;

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

	
	/**
	 * Get the Company from the Guid
	 * @param  string $guid 
	 * @return twentyseven\company 
	 */
	public function api($guid) {
		$company = Company::where('guid', $guid)->first();	
		
		if ($company->visited == null) {
			$company->visited = 1;	
		}
	
		$company->save();
		return $company;
	}



	/**
	 * Set the Company Name for the DataLayer
	 * @param  string $guid 
	 * @return string 
	 */
	public function dataLayer($guid) {
		if ($this->company == null) {
			$this->company = Company::where('guid', $guid)->first();	
		}

		if ($this->company == null) return;
		return $this->company->company;
	}



	/**
	 * Add a session to the Company
	 * @param SessionRequest $request 
	 */
	public function addSession(SessionRequest $request) {
		$session = new Session($request->all());
		$company = Company::findOrFail($request['company_id']);
		$company->session()->save($session);

		return 'done';
	}


	public function displaySessions($id) {
		$company = Company::with('session')->findorFail($id);
		$sessions = $company->session()->orderBy('created_at', 'asc')->get();


		$sessions = $this->setTimeOnPage($sessions);
		
		return view('dashboard.company.session', compact(['company', 'sessions']));
	}

	

	/**
	 * Get the time on Page
	 * @param  /twentyseven/session $object 
	 * @return /twentyseven/session 
	 */
	public function setTimeOnPage($object) {
		

		for ($i = 0; $i < count($object); $i++) {
			$date = Carbon::parse($object[$i]->created_at);
			
			$time = $object[$i]->time_on_page;
			$sec = floor($time);
			
			$milli = (int) (($time - $sec) * 1000);
			$hours = ($time / 3600);
			$minutes = (($time / 60) % 60);
			$seconds = $time % 60;

			if ($minutes < 10) {
				$minutes = "0".$minutes;
			}

			if ($seconds < 10) {
				$seconds = "0".$seconds;
			}

			$object[$i]['time_on_page'] = "$minutes:$seconds";
			$object[$i]['date_viewed'] = $date->toFormattedDateString();
		}

		return $object;
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
