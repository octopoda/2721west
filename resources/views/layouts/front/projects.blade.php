<div class="project-table">
	<div class="project-table__title">
		<h3>Case Studies</h3>
	</div>

	<div class="project-table__project" data-project-link data-link="{{ route('flds') }}">
		<div class="project-table__project--header flds"></div>
		<ul>
			<li>Faith Lutheran Day School</li>
			<li>Design, Development, Strategy</li>
			<li>2013 &ndash; 2015</li>
		</ul>
	</div>


	<div class="project-table__project" data-project-link data-link="{{ route('assetbuilder') }}">
		<div class="project-table__project--header assetbuilder"></div>
		<ul>
			<li>AssetBuilder</li>
			<li>Design, Development, Strategy</li>
			<li>2014 - 2015</li>
		</ul>
	</div>

	<div class="project-table__project" data-project-link data-link="{{ route('innovation') }}">
		<div class="project-table__project--header innovation"></div>
		<ul>
			<li>Innovation Compounding</li>
			<li>Design, Architecture, Strategy</li>
			<li>2014</li>
		</ul>
	</div>


	<div class="project-table__title">
		<h3>Show Case</h3>
	</div>

	<div class="project-table__project" data-project-link data-link="{{ route('ui') }}">
		<div class="project-table__project--header daily"></div>
		<ul>
			<li>100 Days of UI</li>
			<li>Design</li>
			<li>2015</li>
		</ul>
	</div>


	<div class="project-table__project" data-project-link data-link="{{ route('dbu') }}">
		<div class="project-table__project--header dbu"></div>
		<ul>
			<li>Dallas Baptist University</li>
			<li>Design, Development</li>
			<li>2013 &ndash; 2014</li>
		</ul>
	</div>

	<div class="project-table__project" data-project-link data-link="{{ route('aiga') }}">
		<div class="project-table__project--header aiga"></div>
		<ul>
			<li>AIGA Design Week</li>
			<li>Design, Development</li>
			<li>2013</li>
		</ul>
	</div>

	<div class="project-table__project" data-project-link data-link="{{ route('marks') }}">
		<div class="project-table__project--header marks"></div>
		<ul>
			<li>Marks</li>
			<li>Design</li>
			<li>2012 &ndash; 2015</li>
		</ul>
	</div>

	@if ($learnmore) 
		<div class="project-table__title">
			<h3>Learn More</h3>
		</div>
		<div class="project-table__project" data-project-link data-link="{{ route('about') }}">
			<div class="project-table__project--header red"></div>
			<ul>
				<li>About Zack Davis</li>
				<li>Digital Design / Full Stack Developer</li>
				<li></li>
			</ul>
		</div>
	@endif
</div>
