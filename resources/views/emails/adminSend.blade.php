
<h2>{{ $request['title'] }}</h2>

<p>Name: {{ $request['name'] }}</p>
<p>email: {{ $request['email'] }}</p>


@if ($request['select'] == 'hire') 
	
	<p>company: {{ $request['company'] }}</p>

	<h4>Position Details:</h4>
	<p>{{ $request['message'] }}</p>

@elseif ($request['select'] == 'project') 
	
	<p>company: {{ $request['company'] }}</p>
	<p>budget: {{ $request['company'] }}</p>

	<h4>Details about the Project:</h4>
	<p>{{ $request['message'] }}</p>

@elseif ($request['select'] == 'speaking')
	
	<p>Organization: {{ $request['organization'] }}</p>
	
	<h4>Details about the Gig:</h4>
	<p>{{ $request['message'] }}</p>
	
@elseif ($request['select'] == 'beer')  
	
	<h4>What Bar and What time</h4>
	<p>{{ $request['message'] }}</p>

@endif

