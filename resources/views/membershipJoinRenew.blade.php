@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Join/Renew Membership</div>

		<div class="panel-body">

			<h4>Membership in the St. Petersburg Astronomy Club is open to anyone interested in astronomy.</h4>

			<ul>
				<li>If you only wanted to update your profile click <a href="./membershipEditProfile">here</a></li>
				<li>All submitted dues and funds to SPAC, Inc. are considered donations and are non-refundable.</li>
			</ul>

			<form id="membershipForm" class="form-horizontal" action="#" method="post">
				{{ csrf_field() }}
				
				<!-- identification info -->
 				<div class="membershipJoinRenewForm">
					
					<div class="form-group">
						<label class="control-label col-sm-1" for="cemail">E-Mail</label>
						<div class="col-sm-6">
						  <input type="email" class="form-control" id="cemail" size=45 placeholder="Enter email" value="{{ $user->email }}">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-1" for="cname">Adult 1</label>
						<div class="col-sm-6">
							<input class="form-control" id="cname" value="{{ $user->name }}">
						</div>
						<div class="col-sm-3">
							<label class="control-label col-sm-1" for="joined_date">Joined</label>
							<span class="col-sm-1" id='joined_date'>
							</span>
						</div>
					</div>

					<!-- spouse -->
					<div class="form-group">
						<label class="control-label col-sm-1" for="cspouse">Adult 2</label>
						<div class="col-sm-6">
							<input class="form-control" id="cspouse" value="{{ $user->spouse }}">
						</div>
					</div>

					<!-- children -->
					@php
						$childMax = 5;
						for ($idx=1; $idx<=$childMax; $idx++) {
					@endphp
						<!-- child 1 -->
						<div class="form-group">
							<label class="control-label col-sm-1" for="cminor{{ $idx }}">Child {{ $idx }}</label>
							<div class="col-sm-6">
								<input class="form-control" id="cminor1">
							</div>

							<label class="control-label col-sm-1" for="cminor{{ $idx }}age">DOB</label>
							<div class="col-sm-2">
								<input id="cminor{{ $idx }}age" name="cminor{{ $idx }}age" class="form-control" placeholder="mm-dd-yyyy" />
							</div>
						</div>
					@php
						}
					@endphp

					<!-- address -->
					<div class="form-group">
						<label class="control-label col-sm-1" for="caddr">Address</label>
						<div class="col-sm-6">
							<input class="form-control" id="caddr" value="{{ $user->addr }}">
						</div>
					</div>

					<!-- city, state, zip -->
					<div class="form-group">						
						<label class="control-label col-sm-1" for="ccity">City</label>
						<div class="col-sm-4">
							<input class="form-control" id="ccity" value="{{ $user->city }}">
						</div>

						<label class="control-label col-sm-1" for="ccity">State</label>
						<div class="col-sm-2">
							<input class="form-control" id="cstate" value="{{ $user->state }}">
						</div>


						<label class="control-label col-sm-1" for="czip">Zip</label>
						<div class="col-sm-2">
							<input class="form-control" id="czip" value="{{ $user->zip }}">
						</div>
					</div>

					<!-- contact info -->
					<div class="form-group">
						<label class="control-label col-sm-1" for="cphone">Phone</label>
						<div class="col-sm-2">
							<input class="form-control" id="cphone" value="{{ $user->phone1 }}">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-1" for="ccell">Cell</label>
						<div class="col-sm-2">
							<input class="form-control" id="ccell" value="{{ $user->cell }}">
						</div>
					</div>


				</div>

			<table align=center width=100%>

				<!-- misc info -->
				<tr height=15><td></td></tr>
				<tr><td colspan=3 style='border-top:1px solid grey;'>
				<table style='margin-left:30px; margin-top:10px;'>

				<tr><td class='col1x right'><label for="cnewsletter">Newsletter Preference</label>
				</td><td colspan=2>
						<input type="radio" id="cnewsletter_0" name="cnewsletter" value="Email" />Email
						&nbsp;
						<input type="radio" id="cnewsletter_1" name="cnewsletter" value="US Mail" />US Mail
				</td></tr>


				<tr height=15><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_0">Single Membership</label>
				</td><td class='col2x'>
						<input type="radio" id="cmembertype_0" name="cmembertype" value="single" />$20/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email subscription to the Examiner for one adult member and any number of minor children.
				</td></tr>


				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype">Family Membership</label>
				</td><td valign=top colspan=2>
						<input type="radio" id="cmembertype_1" name="cmembertype" value="family" />$25/year
				</td></tr>

				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email subscription to the Examiner for two adult members and any number of minor children.
				</td></tr>


				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_2">Patron Membership</label>
				</td><td>
						<input type="radio" id="cmembertype_2" name="cmembertype" value="patron" />$50/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email or snail mail subscription to the Examiner for one or two adult members and any number of minor children.
				</td></tr>

				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_3">Benefactor Membership</label>
				</td><td>
						<input type="radio" id="cmembertype_3" name="cmembertype" value="benefactor" />$100/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email or snail mail subscription to the Examiner for one or two adult members and any number of minor children.
				</td></tr>

				</table>


				</td></tr>


				<!--
						submit
				-->
				<tr><td colspan=4 class="submit_row">
						<div id='totalCost'>Total:<span id='totalCostVal'>$0.00</span></div>
						<!--
						<input class="submit" type="submit" value="Submit"/>
						-->
						<input id='paypalButton' type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

				</td></tr>

			</table>

			</form>




		</div>
	</div>
@endsection
