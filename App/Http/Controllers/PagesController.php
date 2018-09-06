<?php namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ProjectImage;
use App\Repositories\ProjectRepository;

use Illuminate\Contracts\Filesystem\Cloud as Cloud;
use Illuminate\Contracts\Mail\Mailer;

use Session;
use Mail;

use App\Models\User;
use App\Models\daily;

class PagesController extends Controller {

	public $project;
	protected $mailer;
	protected $assetPath;

	function __construct(ProjectRepository $project, Mailer $mailer) {
		$this->project = $project;
		$this->mailer = $mailer;

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


	protected function sendAHook($title, $message) {
		if ($this->dev) return;

		$data = [
		    'hooksTitle'    => $title,
		    'hooksMessage'  => $message,
		    'hooksApi'      => env('HOOKS_API')
		];
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://hooks.events/hooks/post.php');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close ($ch);
	}


/*
|--------------------------------------------------------------------------
| API Calls
|--------------------------------------------------------------------------
|
| Methods to do something with inforamtion but not specifically 
| for the site views.
|
*/

	/**
	 * Puts the Guid into the session for comapny information
	 * @param  string $guid 
	 * @return        
	 */
	public function guid($guid) {
		Session::put('guid',  $guid);
		return redirect('/');
	}

	/**
	 * Handle the Mail Request 
	 * @param  MailRequest $request [description]
	 * @return [type]               [description]
	 */
	public function mail(MailRequest $request) {
		$emailType = 'emails.project';

		switch ($request['select']) {
			case 'hire':
				$request['title'] = $request['company'] . " Wants to Hire You";
				$emailType = 'emails.hire';
				break;
			case 'project':
				$request['title'] = $request['name'] . " Wants to Talk About Project";
				$emailType = 'emails.project';
				break;
			case 'speaking':
				$request['title'] = $request['organization'] . " Wants to Talk About Speaking";
				$emailType = 'emails.speaking';
				break;
			case 'beer':
				$request['title'] = $request['name'] . " Wants to Drink a Beer with You";
				$emailType = 'emails.beer';
				break;

		}



		Mail::send('emails.adminSend', ['request' => $request], function ($message) use ($request) {
			$message->to('zack@2721west.com')->from($request['email'], $request['name'])->subject($request['title']);
			$this->sendAHook("You're About to Get Mail from ", $request['title']);	
		});


		Mail::send($emailType, ['request'=> $request], function ($message) use ($request) {
			$message->to($request['email'])->from('zack@2721west.com','Zack Davis')->subject('Thanks for contacting me');
		});

		return;
	}


	


/*
|--------------------------------------------------------------------------
| About Views
|--------------------------------------------------------------------------
|
| These views are about Me and will show contact on the phone
|
*/

	public function index() {
		$pageInfo = [
			'pageTitle'  => "Zack Davis - UX Designer, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Zack Davis is a UX Designer, Digital Strategist and Full-Stack Developer who is passionate about solving problems.',
			'pageShort' =>  'Home',
			'navigation' => 'show-contact',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/icons',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer'
		];

		return view('pages.index', compact('pageInfo'));
	}



	public function about() {
		$pageInfo = [
			'pageTitle'  => "About Zack Davis - UX Designer, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Zack Davis has over 13 years in the design industry and 9 years of experience in start-ups. He is experienced in business practices, data management, systems administration, server side coding, front end coding, and of course, design.',
			'pageShort' =>  'About',
			'navigation' => 'show-work',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/icons',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer'
		];

		return view('pages.about', compact('pageInfo'));
	}





/*
|--------------------------------------------------------------------------
| Work Views -- Case Studies
|--------------------------------------------------------------------------
|
| These Views are about My work and will show work on the phone
| 
|
*/


	public function flds() {
		$pageInfo = [
			'pageTitle'  => "Faith Lutheran Day School - Case Study by Zack Davis",
			'pageDesc' => 'Zack Davis has been working with Faith Lutheran Day School for the past two years to build a top of the line website to increase communication and awareness with the local community.',
			'navigation' => 'show-work',
			'pageShort' =>  'FLDS',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/flds',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, Website Strategy, Website Planning, Website Development'
		];

		return view('pages.flds', compact('pageInfo'));
	}

	public function innovation() {
		$pageInfo = [
			'pageTitle'  => "Innovation Compounding Branding - Case Study by Zack Davis",
			'pageDesc' => 'Zack Davis strategized with the stakeholders of Innovation Compounding to craft a new company brand and visual identity.   Once the foundation of the company was solidified, He architected and strategized a plan for an enterprise web application to help Innovation compete on a national scale. ',
			'navigation' => 'show-work',
			'pageShort' =>  'Innovation',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/innovation',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, Company Branding, Site Architecture' 
		];

		return view('pages.innovation', compact('pageInfo'));
	}

	public function assetbuilder() {
		$pageInfo = [
			'pageTitle'  => "AssetBuilder Website - Case Study by Zack Davis",
			'pageDesc' => 'Zack Davis led his development team and help direct The Richards group to build our new website from the ground up.  His responsibilities included creative diretion, front-end development, lead generation strategy and design. ',
			'navigation' => 'show-work',
			'pageShort' =>  'AssetBuilder',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/assetbuilder',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, Company Branding, Creative Direction, Front-end Development'
		];

		return view('pages.assetbuilder', compact('pageInfo'));
	}	




/*
|--------------------------------------------------------------------------
| Work Views -- Show Cases
|--------------------------------------------------------------------------
|
| 
|
*/	

	/**
	 * My Marks View
	 * @return [type] [description]
	 */
	public function marks() {
		$pageInfo = [
			'pageTitle'  => "Various Branding Marks - Zack Davis - Creative Director, Digitial Strategist, and Full-Stack Developer",
			'pageDesc' => 'Various Branding Marks Zack Davis has completed in the past 2 years.',
			'navigation' => 'show-work',
			'pageShort' =>  'Marks',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/logos',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, Logos, Identity Marks'
		];
		
		return view('pages.logos', compact('pageInfo'));
	}

	
	/**
	 * Aiga Design Week View
	 * @return [type] [description]
	 */
	public function aiga() {
		$pageInfo = [
			'pageTitle'  => "AIGA Design Week -- Show case by Zack Davis",
			'pageDesc' => 'Zack Davis designed and developed the mobile application for AIGA DFW Design Week 2013.',
			'navigation' => 'show-work',
			'pageShort' =>  'AIGA',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/aiga',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, AIGA, Board Member, Web Application, Mobile Application'
		];

		return view('pages.aiga', compact('pageInfo'));
	}


	/**
	 * Dbu View
	 * @return [type] [description]
	 */
	public function dbu() {
		$pageInfo = [
			'pageTitle'  => "Dallas Baptist University - Graduate School of Business - Showcase by Zack Davis",
			'pageDesc' => 'Zack Davis worked with DXZ to design and develop a new website for the Dallas Baptist University Graduate School of Business.',
			'navigation' => 'show-work',
			'pageShort' =>  'DBU',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/dbu',
			'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer, Joomla,  Website, Development'
		];

		return view('pages.dbu', compact('pageInfo'));
	}


	public function waitrate() {
		$pageInfo = [
			'pageTitle'  => "Wait Rate - Waiter Rating Application  Showcase by Zack Davis",
			'pageDesc' => 'Applicatioh Study for Zack Davis in UX Research and UX Design.',
			'navigation' => 'show-work',
			'pageShort' =>  'wait',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/wait',
			'keywords' => 'Ux Research, UX Designer, Visual Design'
		];

		return view('pages.wait-rate', compact('pageInfo'));
	}


	public function mcdaniel() {
		$pageInfo = [
			'pageTitle'  => "McDaniel Nutrition Website -  Website for McDaniel Nutrition -  Showcase by Zack Davis",
			'pageDesc' => 'Zack Davis has been working with McDaniel Nutrition  to help her business reach the next step in her digital marketing.',
			'navigation' => 'show-work',
			'pageShort' =>  'mcdaniel',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/mcdaniel',
			'keywords' => 'Digital Strategy, Digital Marketing, Brand Managment, Full-Stack Developement, UI Design, UX Design'
		];

		return view('pages.mcdaniel', compact('pageInfo'));
	}

	public function audioguy () {
		$pageInfo = [
			'pageTitle'  => "The Audio Guy - Version 3 Webiste  - Showcase by Zack Davis",
			'pageDesc' => 'Zack Davis has been working with The Audio Guy to help their business reach the next step in her digital marekting..',
			'navigation' => 'show-work',
			'pageShort' =>  'audioguy',
			'assetPath' => $this->assetPath,
			'shareImage' =>  $this->assetPath . '/images/audioguy',
			'keywords' => 'Digital Strategy, Digital Marketing, Brand Managment, Full-Stack Developement, UI Design, UX Design'
		];

		return view('pages.audioguy', compact('pageInfo'));
	}
	
	

}
