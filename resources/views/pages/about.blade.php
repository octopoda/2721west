@extends('layouts.app')

@section('content')
	<article class="about__wrapper" data-ng-controller="AboutController as vm">
		<div class="row">
			<section class="about__intro">
				<h1> Titles are worthless. </h1>
				
				<p>I am a UX lead, digital marketing strategist, and full-stack developer. I have 15 years of experience in the design/finance industry, focused on branding, design, and development services to start-ups and small businesses.</p>
				<p>I am passionate about building beautiful and engaging digital experiences that draw in users and exceed client expectations. My expertise lies in understanding and executing everything end-to-end, from visual brands and corporate identities through the integration of design, digital marketing strategy, and full-stack development.</p>
				


				<ul class="about__more">
					<li><a data-modal-toggle data-target="contactModal">Contact me<i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://s3.amazonaws.com/2721west-assets/documents/zack-davis-resume.pdf" id="resumeDownload">Download My Resume<i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://www.linkedin.com/in/zackdavis" id="linkedIn">Linked In <i class="fa fa-angle-right"></i></a></li>
              		{{-- <li><a target="_blank" href="https://twitter.com/2721west" id="twitter">Twitter<i class="fa fa-angle-right"></i></a></li> --}}
              		<li><a target="_blank" href="https://dribbble.com/octopoda" id="dribbble">Dribbble<i class="fa fa-angle-right"></i></a></li>
            	</ul>

			</section>
		</div>

		<div class="row">
			<div class="about-resume">
				@include('layouts.front.resume')

				
			</div>

			
		</div>
	</article>
@endsection

