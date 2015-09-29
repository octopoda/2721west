@extends('layouts.admin')
<?php $date = null; ?>
@section('content')
	
	<div class="row">
	<h3>Sessions for {{ $company->company  }}</h3>
	
	<div class="row">
		<table>
			<thead>
				<th></th>
				<th>url</th>
				<th>Browser</th>
				<th>Time on Page:</th>
			</thead>
			<tbody>
	
	@foreach ($sessions as $session) 
			@if ($session->date_viewed != $date)
				<tr class="header-column">
					<td colspan="4">{{ $session->date_viewed }}</td>
				</tr>
			@endif
			<tr>
				<td>&nbsp;</td>
				<td>{{ $session->url }}</td>
				<td>{{ $session->browser }}</td>
				<td>{{ $session->time_on_page }}</td>
			</tr>

			<?php $date = $session->date_viewed; ?>
	@endforeach
			</tbody>
		</table>
	</div>
	
@endsection