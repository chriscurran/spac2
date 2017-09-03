@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Join/Renew Membership</div>

        <div class="panel-body">

			<h4>Membership in the St. Petersburg Astronomy Club is open to anyone interested in astronomy.</h4>

			<ul>
				<li>If you only wanted to update your profile click <a href="./editProfile.php">here</a></li>
			    <li>All submitted dues and funds to SPAC, Inc. are considered donations and are non-refundable.</li>
			</ul>

			<form id="membershipForm" action="#" method="post">
			<table align=center width=100%>

				<!--
						identification info
				-->
				<tr><td class='col1'><label for="cemail">E-Mail</label>
				</td><td>
						<input id="cemail" name="cemail" size="45" />
				</td></tr>

				<tr><td class='col1'><label for="cname">Adult 1</label>
				</td><td>
						<input id="cname" name="cname" size="35" />
						<span id='joined_date_span'>
								<b>Joined</b>: <span id='joined_date'></span>
						</span>
				</td></tr>

				<tr><td class='col1'><label for="cspouse">Adult 2</label>
				</td><td>
						<input id="cspouse" name="cspouse" size="35" />
				</td></tr>

				<tr><td class='col1'><label for="cminor1">Child 1</label>
				</td><td>
						<input id="cminor1" name="cminor1" size="25" />
						<span class='minor-age-wrapper1'>DOB: <input id="cminor1age" name="cminor1age" class="minor-age" size="8" placeholder="mm-dd-yyyy" /></span>
				</td></tr>
				<tr><td class='col1'><label for="cminor2">Child 2</label>
				</td><td>
						<input id="cminor2" name="cminor2" size="25" />
						<span class='minor-age-wrapper2'>DOB: <input id="cminor2age" name="cminor2age" class="minor-age" size="8" placeholder="mm-dd-yyyy" /></span>
				</td></tr>
				<tr><td class='col1'><label for="cminor3">Child 3</label>
				</td><td>
						<input id="cminor3" name="cminor3" size="25" />
						<span class='minor-age-wrapper3'>DOB: <input id="cminor3age" name="cminor3age" class="minor-age" size="8" placeholder="mm-dd-yyyy" /></span>
				</td></tr>
				<tr><td class='col1'><label for="cminor4">Child 4</label>
				</td><td>
						<input id="cminor4" name="cminor4" size="25" />
						<span class='minor-age-wrapper4'>DOB: <input id="cminor4age" name="cminor4age" class="minor-age" size="8" placeholder="mm-dd-yyyy" /></span>
				</td></tr>
				<tr><td class='col1'><label for="cminor5">Child 5</label>
				</td><td>
						<input id="cminor5" name="cminor5" size="25" />
						<span class='minor-age-wrapper5'>DOB: <input id="cminor5age" name="cminor5age" class="minor-age" size="8" placeholder="mm-dd-yyyy" /></span>
				</td></tr>



				<!--
						address info
				-->
				<tr height=15><td></td></tr>
				<tr><td class='col1'><label for="caddr">Address</label>
				</td><td>
						<input id="caddr" name="caddr" size="45" />
				</td></tr>
				<tr><td class='col1'><label for="ccity">City</label>
				</td><td>
						<input id="ccity" name="ccity" size="45" />
						<label for="cstate">State</label>
						<input id="cstate" name="cstate" size="3" />
						<label for="czip">Zip</label>
						<input id="czip" name="czip" size="8" />
				</td></tr>


				<!--
						contact info
				-->
				<tr height=15><td></td></tr>
				<tr><td class='col1'><label for="cphone">Phone</label>
				</td><td>
						<input id="cphone" name="cphone" size="15" />
				</td></tr>
				<tr><td class='col1'><label for="ccell">Cell</label>
				</td><td>
						<input id="ccell" name="ccell" size="15" />
				</td></tr>


				<!--
						misc info
				-->
				<tr height=15><td></td></tr>
				<tr><td colspan=3 style='border-top:1px solid grey;'>
				<table style='margin-left:30px; margin-top:10px;'>

				<tr><td class='col1x right'><label for="cnewsletter">Newsletter Preference</label>
				</td><td colspan=2>
						<input type="radio" id="cnewsletter_0" name="cnewsletter" value="Email" />Email<br>
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
