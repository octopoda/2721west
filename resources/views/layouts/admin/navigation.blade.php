<div main-n class="dashboard__navigation__section">	
	<div class="dashboard__navigation--logo logo"><a href="/">2721 West</a></div>

	@if ($currentUser) 
	<nav class="dashboard__navigation--login">
		<ul>
			 <li><a href="">{{ $currentUser->name }}</a></li>
			<li><a href="{{ url('/auth/logout') }}">Log out</a></li>
		</ul>
	</nav>
	@endif
</div>

<div  class="dashboard__sub-navigation">
	<nav>
		<ul>
			<li><a href=" {{ route('dashboard.projects.index') }}">Projects</a></li>
			<li><a href=" {{ route('dashboard.company.index') }}">Companies</a></li>
			<li><a href="{{ route('dashboard.project-types.index') }}">Types</a></li>
		</ul>
	</nav>
</div>


