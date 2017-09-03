@extends('layouts.app')

<?php define("USE_SANDBOX", true); ?>


@section('header')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
@endsection


@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Edit Profile</div>

		<div class="panel-body">

			<form id="membershipForm" class="form-horizontal" action="/member/save" method="post">
				{{ csrf_field() }}
				<div class="membershipEditForm">

					<!--
						identification info
					-->
					@include("partials.user.basic");

					<!--
						submit
					-->
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-1">
							<button type="submit" id="submit" class="btn btn-primary">Save</button>
						</div>
					</div>


				</div>
			</form>

		</div>
	</div>


@endsection

@section('footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>


<script>
	$().ready(function(){
		// DOMN is ready

		// add a date picker to all the DOB fields
		var dates = $('.dob');
		_.each(dates, function(dob) {
			new Pikaday({ 
				field: dob, 
				format: 'MM-DD-YYYY',
				yearRange: [1920,2020]
			});
		})


		$("#membershipForm").submit(function(event){
			var obj = {};

			obj.email = $.trim($("#email").val());
			if (!isValidEmail(obj.email, "#email", "Please enter a valid email address")) {
				event.preventDefault();
				return;
			}

			obj.name = $("#name").val();
			if (!isValid(obj.name, "#name", "Please enter your name")) {
				event.preventDefault();
				return;
			}

			obj.addr = $("#addr").val();
			if (!isValid(obj.addr, "#addr", "Please enter your address")) {
				event.preventDefault();
				return;
			}

			obj.city = $("#city").val();
			if (!isValid(obj.city, "#city", "Please enter your city")) {
				event.preventDefault();
				return;
			}

			obj.state = $("#state").val();
			if (!isValid(obj.state, "#state", "Please enter your state")) {
				event.preventDefault();
				return;
			}

			obj.zip = $("#zip").val();
			if (!isValid(obj.zip, "#zip", "Please enter your zip code")) {
				event.preventDefault();
				return;
			}

			obj.phone1 = $("#phone").val();
			if (!isValid(obj.zip, "#phone", "Please enter your phone number")) {
				event.preventDefault();
				return;
			}

			//
			// disable the inputs for the duration of the ajax request
			//
			$inputs.prop("disabled", true);
// debugger;

		});

	});


	function isValid(val, domId, errMsg) {
			if (val === '') {
					alert(errMsg);
					$(domId).focus();
					return false;
			}
			return true;
	}

	function isValidEmail(email, domId, errMsg) {
			if (email === '') {
					alert(errMsg);
					$(domId).focus();
					return false;
			}

			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(email)) {
					alert(errMsg);
					$(domId).focus();
					return false;
			}

			return true;
	}

</script>
@endsection