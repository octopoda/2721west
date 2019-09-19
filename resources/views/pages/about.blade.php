@extends('layouts.app')

@section('content')
	<article class="about__wrapper" data-ng-controller="AboutController as vm">
		<div class="row">
			<section class="about__intro">
				<h2 style="color:#d20c2c">I am a product generalist.  </h2>
				<p>I have 15+ years experience in agencies and in-house with the past 12 focused on startups of all sizes. My focus is always on customer empathy and using qualitative and quantitative data to create innovative product strategies. </p>
				<p>Being a constant learner, I wear many hats in innovation strategy, product vision, design thinking, full-stack engineering, and strategic marketing. I&rsquo;ve used this generalist skill set to build over 120+ products in the past 10 years working with and leading teams of all sizes.</p>
				<p>Please reach out to me for any opporunities to help you build your next idea.</p>

				<ul class="about__more">
					<li><a data-modal-toggle data-target="contactModal">Contact me<i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://2721west-assets.s3.amazonaws.com/documents/Zack+Davis.pdf" id="resumeDownload">Download My Resume<i class="fa fa-angle-right"></i></a></li>
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

