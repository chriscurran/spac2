@extends('layouts.app')

@section('content')

	<script>
	function loadPDF(fname) {
		window.open(fname);
	}

	function joinRenew() {
		window.location = "./membershipJoinRenew";
	}

	function editProfile() {
		window.location = "./membershipEditProfile";
	}

	function copyMemberTableToUsers() {
		window.location = "./copyMemberTableToUsers";
	}
	function setUserPasswords() {
		window.location = "./setUserPasswords";
	}

	</script>


    <div class="panel panel-default">
        <div class="panel-heading">Membership</div>

        <div class="panel-body">

		    <div>
			    Membership in the St. Petersburg Astronomy Club, Inc. is open to anyone
		    	interested in astronomy. Persons who are interested
			    in joining should be from planet Earth and click "Join" below.
		    </div>

		    <DIV style='margin-top:20px; width:80%'>
				<UL>
			    <LI>
					The St. Petersburg Astronomy Club is the oldest and largest astronomical 
					organization in the south-eastern United States. We are dedicated to promoting
					the science of astronomy and the education of the public and have been meeting 
					continuously since 1927.
			    <p>
			    <LI>
			    	Astronomy Magazine and Sky & Telescope Magazine both offer discounts on
			    your initial subscription through the club.
			    <p>

			    <LI>The St. Petersburg Astronomy Club, Inc. is a 501(c)(3) tax-exempt organization. 
			    	Your membership and other donations are tax deductible under IRS rules.
			    <p>
			    	
			    <LI>
			    	All dues and funds submitted to SPAC, Inc., are considered
			    donations and are non-refundable.

			    </UL>
		    </div>



		    <H4 style='margin-top:30px;'>Join or Renew Membership</H4>

		    <div>
		    	<button type="button" onclick="loadPDF('http://spac-assets.s3-us-west-2.amazonaws.com/resources/SPAC_Trifold.pdf');">Brochure</button>
				<button type="button" onclick="return joinRenew();">Join/Renew</button>
				<button type="button" onclick="return editProfile();">Edit Profile</button>
				<!-- <button type="button" onclick="return copyMemberTableToUsers();">Copy tables</button> -->
				<!-- <button type="button" onclick="return setUserPasswords();">Set Passwords</button> -->
		    </div>

        </div>
    </div>
@endsection
