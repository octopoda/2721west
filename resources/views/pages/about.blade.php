@extends('layouts.app')

@section('content')
	<article class="about__wrapper" data-ng-controller="AboutController as vm">
		<div class="row">
			<section class="about__intro">
				<h1> I&rsquo;m a digital designer and a full stack developer. Someone who will work 
					<span data-browser-detect class="malarkey" ng-click="vm.type()">
						<span class="malarkey--hover"></span>
                		<span class="malarkey--text" id="malarkey">smart</span>
                	</span>
				to get the job done.  </h1>
				<p>I have over 13 years in the industry and over nine years of experience in start-ups.  During that time I have also run my own digital boutique agency, Octopoda Interactive. I understand what it takes to build an application from the ground up.  I am experienced in business practices, data management, systems administration, server side coding, front end coding, and of course, design. </p>
				<p>I am fixated on building delightful and engaging digital experiences with not only the users in mind, but the company&rsquo;s goals too. </p>
				<p>If you feel you have a place for me in your company/agency, <a data-modal-toggle data-target="contactModal">contact me</a> and <br>let&rsquo;s talk.</p>
			</section>
		</div>

		<div class="row">
			<div class="about-resume">
				@include('layouts.front.resume')
			</div>
		</div>
	</article>
@endsection

