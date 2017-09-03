@extends('layouts.app')

@section('content')
	<div class="panel panel-default resources">
		<div class="panel-heading">Contact Us</div>

		<div class="panel-body">

		@if ($mode === "complete")
			Thanks! Someone will get back to you as soon as possible.
		@else

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif			

			<form id="contactUsForm" class="" action="/contact" method="post">
				{{ csrf_field() }}

				<container>
				<div class="form-group">
					<label class="" for="email">Your email address</label>
				  	<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}">
				</div>

				<div class="form-group">
					<label class="" for="name">Your name</label>
				  	<input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
				</div>

				<div class="form-group">
					<label class="" for="message">Message</label>
					<textarea class="form-control contactUsMessage" id="message" name="message"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
				</container>
			</form>
		
		@endif
		
		</div>
	</div>

@endsection
