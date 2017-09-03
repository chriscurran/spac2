@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Membershp List</div>

        <div class="panel-body">
        	<table class="table table-striped">
				<thead class="">
					<tr>
						<th>Names</th>
						<th>email</th>
						<th>City/State</th>
						<th>Phone #</th>
						<th>cell #</th>
					</tr>
				</thead>
        	@foreach ($members as $member)
        		<tr>
					<td scope="row">{{ $member->name }}</td>
					<td scope="row"><a href="mailto:{{ $member->email }}">{{ $member->email }}</a></td>
					<td scope="row">{{ $member->city }}, {{ $member->state }}</td>
					<td scope="row">{{ $member->phone1 }}</td>
					<td scope="row">{{ $member->cell }}</td>
				</tr>
        	@endforeach
        </table>
        </div>
    </div>
@endsection
