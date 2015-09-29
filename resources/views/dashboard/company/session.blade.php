@extends('layouts.admin')

@section('content')
	
	<div class="row">
	<h3>Sessions for {{ $company->company  }}</h3>
	
	
	<div class="row">
		<table>
			<thead>
				<th>url</th>
				<th>Browser</th>
				<th>Time on Page:</th>
			</thead>
			<tbody>
	@foreach ($sessions as $session) 
			<tr>
				<td>{{ $session->url }}</td>
				<td>{{ $session->browser }}</td>
				<td>{{ $session->time_on_page }}</td>
			</tr>
	@endforeach
			</tbody>
		</table>
	</div>
	
@endsection