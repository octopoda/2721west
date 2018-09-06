<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GoogleController extends Controller {

	protected $assetPath;

	function __construct() {
		$this->dev = env('DEV');
		$this->setAssets();
	}

/*
|--------------------------------------------------------------------------
| Site Setup
|--------------------------------------------------------------------------
|
| Description 1
|  Description 2
| 
|
*/	
	/**
	 * Sets up the assets based on Dev mode or not.
	 */
	protected function setAssets() {
		if ($this->dev) {
			$this->assetPath = "/assets";
		} else {
			$this->assetPath = "https://s3.amazonaws.com/2721west-assets";
		}
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pageInfo = [
			'pageTitle'  => "Zack Davis - Creative Director, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Zack Davis is a Creative Director, Digital Strategist and Full-Stack Developer who is passionate about solving problems.',
			'pageShort' =>  'Home',
			'navigation' => 'show-contact',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/icons',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer'
		];

		return view('google.index', compact('pageInfo'));
	}

	public function namegame() {
		return view('google.namegame');
	}


	public function password(Request $request) {
		$pdfLink = "https://s3.amazonaws.com/2721west-assets/documents/z-davis-pdf.zip";
		$ppLink = "https://s3.amazonaws.com/2721west-assets/documents/z-davis-pp.zip";
		$keynoteLink = "https://s3.amazonaws.com/2721west-assets/documents/z-davis-kn.zip";
		$vidLink = "https://s3.amazonaws.com/2721west-assets/documents/z-davis-vid.zip";
		$file = '';

		if ($request->get('password') == 'hireme') {
			$file = $request->get('fileType');

			switch ($request->get('fileType')['id']) {
				case 1: 
					return $keynoteLink;
					break;
				case 2: 
					return $ppLink;
					break;
				case 3: 
					return $pdfLink;
					break;
			}
		} else {
			return response('false', 203);
		}
	}


	public function easteregg() {
		$pageInfo = [
			'pageTitle'  => "Zack Davis - Creative Director, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Zack Davis is a Creative Director, Digital Strategist and Full-Stack Developer who is passionate about solving problems.',
			'pageShort' =>  'Home',
			'navigation' => 'show-contact',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/icons',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer'
		];

		return view('google.easter', compact('pageInfo'));
	}


	public function animation() {
		$pageInfo = [
			'pageTitle'  => "Zack Davis - Creative Director, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Zack Davis is a Creative Director, Digital Strategist and Full-Stack Developer who is passionate about solving problems.',
			'pageShort' =>  'Home',
			'navigation' => 'show-contact',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/icons',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, UX Designer'
		];
		
		return view('google.animation', compact('pageInfo'));
	}

}
