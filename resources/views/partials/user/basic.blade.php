<!-- 
	Partial for inputing of basic user info for a <form>. 
-->
<input class="hidden" id="id" name="id" value="{{ $user->id }}">
<div class="form-group">
	<label class="control-label col-sm-1" for="email">E-Mail</label>
	<div class="col-sm-6">
	  <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-1" for="name">Adult 1</label>
	<div class="col-sm-6">
		<input class="form-control" id="name" name="name" value="{{ $user->name }}">
	</div>

	<label class="control-label col-sm-1" for="joined_date">Joined</label>
	<div class="col-sm-2">
		<input disabled class="form-control" id="joined" name="joined" value="{{ $user->joined }}">
	</div>
</div>

<!-- spouse -->
<div class="form-group">
	<label class="control-label col-sm-1" for="spouse">Adult 2</label>
	<div class="col-sm-6">
		<input class="form-control" id="spouse" name="spouse" value="{{ $user->spouse }}">
	</div>
</div>

<!-- children -->
	<!-- child 1 -->
	<div class="form-group">
		<label class="control-label col-sm-1" for="minor1_name">Child 1</label>
		<div class="col-sm-6">
			<input class="form-control" id="minor1_name" name="minor1_name" value="{{ $user->minor1_name }}">
		</div>

		<label class="control-label col-sm-1" for="minor1_age">DOB</label>
		<div class="col-sm-2">
			<input id="minor1_age" name="minor1_age" class="form-control dob" placeholder="mm-dd-yyyy" value="{{ $user->minor1_age }}"/>
		</div>
	</div>

	<!-- child 2 -->
	<div class="form-group">
		<label class="control-label col-sm-1" for="minor2_name">Child 2</label>
		<div class="col-sm-6">
			<input class="form-control" id="minor2_name" name="minor2_name" value="{{ $user->minor2_name }}">
		</div>

		<label class="control-label col-sm-1" for="minor2_age">DOB</label>
		<div class="col-sm-2">
			<input id="minor2_age" name="minor2_age" class="form-control dob" placeholder="mm-dd-yyyy" value="{{ $user->minor2_age }}"/>
		</div>
	</div>

	<!-- child 3 -->
	<div class="form-group">
		<label class="control-label col-sm-1" for="minor3_name">Child 3</label>
		<div class="col-sm-6">
			<input class="form-control" id="minor3_name" name="minor3_name" value="{{ $user->minor3_name }}">
		</div>

		<label class="control-label col-sm-1" for="minor3_age">DOB</label>
		<div class="col-sm-2">
			<input id="minor3_age" name="minor3_age" class="form-control dob" placeholder="mm-dd-yyyy" value="{{ $user->minor3_age }}"/>
		</div>
	</div>

	<!-- child 4 -->
	<div class="form-group">
		<label class="control-label col-sm-1" for="minor4_name">Child 4</label>
		<div class="col-sm-6">
			<input class="form-control" id="minor4_name" name="minor4_name" value="{{ $user->minor4_name }}">
		</div>

		<label class="control-label col-sm-1" for="minor4_age">DOB</label>
		<div class="col-sm-2">
			<input id="minor4_age" name="minor4_age" class="form-control dob" placeholder="mm-dd-yyyy" value="{{ $user->minor4_age }}"/>
		</div>
	</div>

	<!-- child 5 -->
	<div class="form-group">
		<label class="control-label col-sm-1" for="minor5_name">Child 5</label>
		<div class="col-sm-6">
			<input class="form-control" id="minor5_name" name="minor5_name" value="{{ $user->minor5_name }}">
		</div>

		<label class="control-label col-sm-1" for="minor5_age">DOB</label>
		<div class="col-sm-2">
			<input id="minor5_age" name="minor5_age" class="form-control dob" placeholder="mm-dd-yyyy" value="{{ $user->minor5_age }}"/>
		</div>
	</div>


<!-- address -->
<div class="form-group">
	<label class="control-label col-sm-1" for="addr">Address</label>
	<div class="col-sm-6">
		<input class="form-control" id="addr" name="addr" value="{{ $user->addr }}">
	</div>
</div>

<!-- city, state, zip -->
<div class="form-group">						
	<label class="control-label col-sm-1" for="city">City</label>
	<div class="col-sm-4">
		<input class="form-control" id="city" name="city" value="{{ $user->city }}">
	</div>

	<label class="control-label col-sm-1" for="state">State</label>
	<div class="col-sm-2">
		<input class="form-control" id="state" name="state" value="{{ $user->state }}">
	</div>


	<label class="control-label col-sm-1" for="zip">Zip</label>
	<div class="col-sm-2">
		<input class="form-control" id="zip" name="zip" value="{{ $user->zip }}">
	</div>
</div>

<!-- contact info -->
<div class="form-group">
	<label class="control-label col-sm-1" for="phone">Phone</label>
	<div class="col-sm-2">
		<input class="form-control" id="phone" name="phone1" value="{{ $user->phone1 }}">
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-1" for="cell">Cell</label>
	<div class="col-sm-2">
		<input class="form-control" id="cell" name="cell" value="{{ $user->cell }}">
	</div>
</div>
